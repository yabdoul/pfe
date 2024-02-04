<?php

namespace App\Http\Controllers;

use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;
use Illuminate\Http\Request;
use PDF;
use Smalot\PdfParser\Parser;

class SpacyController extends Controller
{
    public function runSpacyScript()
    {
        // Utilisez plutôt config pour la configuration globale
        config(['process.env.PATH' => getenv('PATH') . ';C:\Users\yassir\AppData\Local\Programs\Python\Python312\Scripts']);

        $parser = new Parser();
        $pdf = $parser->parseFile('cvs/tster.pdf');
        $text = $pdf->getText();
        $texte = 'hello';

        // Utilisez le chemin absolu complet vers votre script Python
        $commandPath = 'C:\Users\yassir\Desktop\spacy\main.py';
        $python = 'C:\Users\yassir\AppData\Local\Programs\Python\Python312\scripts\python.exe';

        $process = new Process([$python, $commandPath, $text]);

        try {
            // Exécute le script Python avec Symfony Process
            $process->mustRun();
            echo $process->getOutput();
        } catch (ProcessFailedException $exception) {
            echo $exception->getMessage();
        }
    }
}
