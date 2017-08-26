<div class="row">
            <div class="nine wide column">
                   {{-- Using the Laravel HTML Form Collective to create our form --}}
        {{ Form::open(array('route' => 'projet.store','files' => true )) }}
                <div class="ui form segment">
                  <div class="ui centered grid">
                   <div class="eight wide column">
                      <div class="field">
                        <label>Décrivez-nous en détail votre projet*</label>
                        <textarea style="margin-top: 0px; margin-bottom: 0px; height: 168px;"  name="description" required></textarea>
                      </div>
                      <div class="field">
                    <label>type de projet</label>
                    <select class="ui search dropdown" name="categorie">
                      <option value="">categorie</option>
                      <option value="type1">Alabama</option>
                      <option value="type2">Alaska</option>
                    </select>
                  </div>
                    </div>
                    <div class="eight wide column">
                      <div class="field">
                        <label>Montant estimé en DH *</label>
                        <div class="ui left icon input">
                        <input type="number" name="montant_estime" placeholder="Montant..." required>
                        <i class="money icon orange"></i>
                        </div>
                      </div>
                      <div class="field">
                        <label>Titre du projet*</label>
                        <div class="ui left icon input">
                        <input type="text" name="title" placeholder="Titre du projet" required>
                        <i class="idea icon orange"></i>
                        </div>
                      </div>
                      <div class="field">
                      <label>Photos descriptives</label>
                        <input type="file" name="photos[]" multiple  required />
                      </div>
                    </div>
                   
                    </div>
                  
                    <div class="ui one column stackable center aligned page grid">
                       <div class="column twelve wide">
                           <!-- <button class="ui orange button">Suivant</button> -->
                           <button class="ui orange right labeled icon button" type="submit">
                            Suivant
                            <i class="right chevron icon"></i>
                            </button>
                       </div>
                    </div>
                  <!-- <div class="ui fluid medium orange submit button">Suivant</div> -->
                <p>Tout les champs avec * doivent être obligatoirement remplis</p>
                </div>
                 {{ Form::close() }}
            </div>
        </div>
