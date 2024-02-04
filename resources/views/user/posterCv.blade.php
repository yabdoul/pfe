@extends('layouts.default')

@section('content')

   <section class="client_section ">
        <div class="container" style="padding:40px">
          <div class="heading_container heading_center">
            <h2>
              What Our Clients Say 
            </h2>
          </div>
          <div class="carousel-wrap layout_padding2-top ">
            <div class="owl-carousel">
              <div class="item">
                <div class="box">
                  <div class="client_id">
                    <div class="img-box">
                      <img src="images/client-1.jpg" alt="">
                    </div>
                    <div class="client_detail">
                      <div class="client_info">
                        <h6 class="poste">
                          eKutive directeur business unit - Tanger | Tanger (Maroc)
                        </h6>
                        <div class="date"></div>
                      </div>
                      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">diposer cv <i class="fa-solid fa-file-import"></i> </button>
                     
                    </div>
                  </div>
                  <div class="info" style="margin: 9px 0px 3px 17px ">
                    <i class="fa fa-binoculars" aria-hidden="true"></i>
                    <span style="color: #5b5b5b; margin-top: 5px;">
                      • Déployer la stratégie commerciale de l’entreprise dans sa BU,
                      • Assurer le développement du chiffre d’affaires dans sa région,
                      • Diriger les activités de l’usine de production,
                      •...
                    </span>
                  </div>
                  <div class="client_text">
                    <ul style="display: block; margin-top: -15px;">
                      <!--<li>Type de contrat : CDI</li>-->
                      <li>Secteur d'activité : <a href="/offres.html?sectorId%5B0%5D=11">BTP / Génie Civil</a></li>
                      <li>Fonction : <a href="/offres.html?positionId%5B0%5D=100&amp;positionId%5B1%5D=">Autres directions</a></li>
                      <li>
                        Expérience requise:
                        <a href="/offres.html?workExperienceId%5B0%5D=5">De 5 à 10 ans</a>
                      </li>
                      <li>
                        Niveau d'étude demandé:
                        <a href="/offres.html?studyLevelId=bac5%2B">Bac +5 et plus</a>
                      </li>
                      <li>
                        Type de contrat proposé:
                        <a href="/offres.html?contractType=1">CDI</a> - Télétravail: Non
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              
                
             <div class="item">
                <div class="box">
                  <div class="client_id">
                    <div class="img-box">
                      <img src="images/client-1.jpg" alt="">
                    </div>
                    <div class="client_detail">
                      <div class="client_info">
                        <h6 class="poste">
                          eKutive directeur business unit - Tanger | Tanger (Maroc)
                        </h6>
                        <div class="date"></div>
                      </div>
                      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">diposer cv <i class="fa-solid fa-file-import"></i> </button>
                     
                    </div>
                  </div>
                  <div class="info" style="margin: 9px 0px 3px 17px ">
                    <i class="fa fa-binoculars" aria-hidden="true"></i>
                    <span style="color: #5b5b5b; margin-top: 5px;">
                      • Déployer la stratégie commerciale de l’entreprise dans sa BU,
                      • Assurer le développement du chiffre d’affaires dans sa région,
                      • Diriger les activités de l’usine de production,
                      •...
                    </span>
                  </div>
                  <div class="client_text">
                    <ul style="display: block; margin-top: -15px;">
                      <!--<li>Type de contrat : CDI</li>-->
                      <li>Secteur d'activité : <a href="/offres.html?sectorId%5B0%5D=11">BTP / Génie Civil</a></li>
                      <li>Fonction : <a href="/offres.html?positionId%5B0%5D=100&amp;positionId%5B1%5D=">Autres directions</a></li>
                      <li>
                        Expérience requise:
                        <a href="/offres.html?workExperienceId%5B0%5D=5">De 5 à 10 ans</a>
                      </li>
                      <li>
                        Niveau d'étude demandé:
                        <a href="/offres.html?studyLevelId=bac5%2B">Bac +5 et plus</a>
                      </li>
                      <li>
                        Type de contrat proposé:
                        <a href="/offres.html?contractType=1">CDI</a> - Télétravail: Non
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              
          </div>
        </div>

      </section>
       
      <input type="hidden" id="modalMessage" value="{{ Session::get('message') }}">
      <div class="modal fade" id="sessionmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal Title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Display your message here -->
                    <p>{{ Session::get('message') }}</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" >
          <div class="modal-content">
              <button type="button" class="btn-close modal_close" data-bs-dismiss="modal" aria-label="Close"><i class="fa-solid fa-xmark"></i></button>
            
            <div class="modal-body">
              <div class="frame">
               
                <form action="{{ route('diposer') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div >
                    <div class="row">
                      <div class="col">
                        @auth
                        <div class="dropzone">
                          <div class="text" style="display: flex; flex-direction:column">
                            <p>Faites glisser ou cliquez pour Télécharger le fichier</p>
                            <p>(.doc, .docx, .pdf, .rtf, .txt. Taille max. 2MB)</p>
                             </div>
                                <input type="file" name='cv' class="upload-input" />
                                   </div>
                                   @if ($errors->has('file'))
                                   <span class="errormsg text-danger">{{ $errors->first('file') }}</span>
                                     @endif
                                  </div>
                               </div>
                                </div>
                      </div>
                      <div class="col">
                        <div class="form-group nonauth">
                          <label for="exampleInputEmail1">numero telephone</label>
                          <input type="text" class="form-control" id="exampleInputEmail1" name='numero' aria-describedby="emailHelp" placeholder="Enter numero">
                          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                       
                      </div>  
                      <div class="modal-footer" >
                        <button type="submit"  class="btn btn-secondary" style="background:" data-dismiss="modal">diposer</button>
                      </div>
                      </div>
                    </div>
                  </form>
                    @endauth
                    @guest
                   
                    <div class="dropzone" style="margin-top:100px; display:flex;justify-content:center;
                    align-items:center;">
                      <div class="text" style="display: flex; flex-direction:column">
                        <p>vous n'est pas authentifier</p>
                         </div>
                            </div>                              
                              </div>                             
                              </div>
                                </div>
                                   </div>
                  
                  </div>  
                  <div class="modal-footer" >
                      
                    <a href="{{route('login')}}" class="btn btn-secondary" style="background:" data-dismiss="modal">se connecter</a>
                  </div>
                  </div>
                </div>
                       
                 @endguest
                 
                </div>
		     
              
            </div>
         
          </div>
        </div>
      </div>
     
@endsection
