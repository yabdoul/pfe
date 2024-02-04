<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Smalot\PdfParser\Parser;
use PDF;

class PDFController extends Controller
{
    public function extract()
    {
        $parser = new Parser();
        $pdf = $parser->parseFile('cvs/tster.pdf');
        $text = $pdf->getText();
        $text2 = str_replace(["\n", "\r"], '==BR==', $text);
        $lines = explode('==BR==', $text2);

        // Initialize arrays to store titles and associated paragraphs
        $titles = [];
        $paragraphs = [];
        $currentTitle = "";

        foreach ($lines as $line) {
            // Check if the line is not a number and does not resemble a date range or phone number
            if (!is_numeric($line) && !$this->isDateRange($line) && !$this->isPhoneNumber($line)) {
                // Check if the line is in uppercase and contains the newline character
                if ((strtoupper($line) === $line || $this->istitletype($line)) && $this->isTitleAlone($line))  {
                    // New title found
                    $currentTitle = $line;
                    $titles[] = $currentTitle;
                    // Initialize the paragraph for the current title
                    $paragraphs[$currentTitle] = '';
                } else {
                    // Concatenate the current line to the existing paragraph for the current title
                    $paragraphs[$currentTitle] .= $line . ' ';
                }
            }
        }

        // Additional logic for extracting images (if needed)
        $images = $pdf->getObjectsByType('XObject', 'Image');
        $imageContents = [];

        foreach ($images as $image) {
            $imageContents[] = base64_encode($image->getContent());
        }

        // Pass titles, paragraphs, and image contents to the view
        $pdf = PDF::loadView('tst', ['titles' => $titles, 'paragraphs' => $paragraphs, 'imageContents' => $imageContents]);

        return $pdf->stream('example.pdf');
    }

    private function isTitleAlone($line)
    {
        // Use a regex to check if the line contains only the title
        return preg_match('/^\s*' . preg_quote($line, '/') . '\s*$/i', $line) === 1;
    }

    private function isDateRange($line)
    {
        // Use a regex to check if the line resembles a date range (e.g., 2008 - 2012)
        return preg_match('/^\s*\d{4}\s*-\s*\d{4}\s*$/',  $line) === 1;
    }

 private function istitletype($line)
{
    $words = explode(' ',$line);
    $uppercaracter = 0;
    if($this->isTitleAlone($line)){
        if(sizeof($words)>2){
            foreach ($words as $word) {
                if ($word[0] == strtoupper($word[0])) {
                    $uppercaracter++;
                }
            }
        
        }
    }
    
   
    return $uppercaracter == sizeof($words);
}

    private function isPhoneNumber($line)
    {
        // Use a regex to check if the line resembles a phone number
        return preg_match('/^\s*\(\d{3}\)\s*\d{3}-\d{4}\s*$/', $line) === 1;
    }
}
