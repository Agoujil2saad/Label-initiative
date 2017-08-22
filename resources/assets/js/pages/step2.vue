<template>
  

 <div class="row">
  <div class="ui ordered steps">
                    <div class="step">
                        <div class="content">
                            <div class="title">S'identifier</div>
                            <div class="description">Choose your shipping options</div>
                        </div>
                    </div>
                    <div class="active step">
                        <div class="content">
                            <div class="title">Mon projet</div>
                            <div class="description">Enter billing information</div>
                        </div>
                    </div>
                    <div class="step">
                        <div class="content">
                            <div class="title">Créer mon compte</div>
                            <div class="description">Verify order details</div>
                        </div>
                    </div>
      </div>

       
            <div class="nine wide column">
                <form action="post">
                <div class="ui form segment">
                  <div class="ui centered grid">
                    <div class="eight wide column">
                      <div class="field">
                        <label>Catégorie*</label>
                        <select class="ui fluid dropdown">
                            <option value="">Catégorie</option>
                            <option value="AL">Catégorie 1</option>
                            <option value="AK">Catégorie 2</option>
                            <option value="AZ">Catégorie 3</option>
                        </select>
                      </div>
                      <div class="field">
                        <label>Montant estimé en DH *</label>
                        <div class="ui left icon input">
                        <input type="number" name="montant" placeholder="Montant..." required>
                        <i class="money icon orange"></i>
                        </div>
                      </div>
                      <div class="field">
                        <label>Titre du projet*</label>
                        <div class="ui left icon input">
                        <input type="text" name="titre_du_projet" placeholder="Titre du projet" required>
                        <i class="idea icon orange"></i>
                        </div>
                      </div>
                    </div>
                    <div class="eight wide column">
                      <div class="field">
                        <label>Décrivez-nous en détail votre projet*</label>
                        <textarea style="margin-top: 0px; margin-bottom: 0px; height: 168px;" required></textarea>
                      </div>
                    </div>
                    </div>
                  
                    <div class="ui one column stackable center aligned page grid">
                       <div class="column twelve wide">
                           <!-- <button class="ui orange button">Suivant</button> -->
                           <button class="ui orange right labeled icon button">
                            Suivant
                            <i class="right chevron icon"></i>
                            </button>
                       </div>
                    </div>
                  <!-- <div class="ui fluid medium orange submit button">Suivant</div> -->
                <p>Tout les champs avec * doivent être obligatoirement remplis</p>
                </div>
                </form>
      </div>
</div>

</template>

<script>
  export default {}
</script>


@extends('layouts.master_1')
@section('content')

<div id="app" class="row">

        <form-wizard @on-complete="onComplete"
                     color="gray"
                     error-color="#a94442">
                      <div class="ui ordered steps">
                    <div class="step">
                        <div class="content">
                            <div class="title">S'identifier</div>
                            <div class="description">Choose your shipping options</div>
                        </div>
                    </div>
                    <div class="active step">
                        <div class="content">
                            <div class="title">Mon projet</div>
                            <div class="description">Enter billing information</div>
                        </div>
                    </div>
                    <div class="step">
                        <div class="content">
                            <div class="title">Créer mon compte</div>
                            <div class="description">Verify order details</div>
                        </div>
                    </div>
      </div>
            <tab-content title="Personal details"
                         icon="ti-user" :before-change="validateFirstTab">


               <vue-form-generator :model="model" 
                                   :schema="firstTabSchema"
                                   :options="formOptions"
                                   ref="firstTabForm"
                                   >
                                     
               </vue-form-generator>
               
            </tab-content>
            <tab-content title="Additional Info"
                         icon="ti-settings" :before-change="validateSecondTab">
             <vue-form-generator :model="model" 
                                   :schema="secondTabSchema"
                                   :options="formOptions"
                                   ref="secondTabForm"
                                   >                                
               </vue-form-generator>
               
            </tab-content>
            <tab-content title="Last step"
                         icon="ti-check">
              <h4>Your json is ready!</h4>
              <div class="panel-body">
                <pre v-if="model" v-html="prettyJSON(model)"></pre>
              </div>
            </tab-content>
        </form-wizard>
 
</div>

@endsection
