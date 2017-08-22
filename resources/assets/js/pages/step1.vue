<template>
  


  <div class="row">
          <div class="ui ordered steps">
            <div class="active step">
              <div class="content">
                <div class="title">S'identifier</div>
                <div class="description">Choose your shipping options</div>
              </div>
            </div>
            <div class="step">
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
        

        <form action="post">
              <div class="ui form segment">
                <div class="two fields">
                  <div class="field">
                    <label>Vous êtes un(e)*</label>
                    <select class="ui search dropdown">
                      <option value="">Vous êtes...</option>
                      <option value="AL">Alabama</option>
                      <option value="AK">Alaska</option>
                    </select>
                  </div>
                  <div class="field">
                    <label>Ville*</label>
                    <div class="ui dropdown selection">
                      <input type="hidden" name="gender">
                      <div class="default text">Ville</div>
                      <i class="dropdown icon"></i>
                      <div class="menu">
                        <div class="item" data-value="male">Male</div>
                        <div class="item" data-value="female">Female</div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="two fields">
                  <div class="field">
                    <label>Nom complet*</label>
                    <div class="ui left icon input">
                      <input placeholder="Nom complet" type="text" required>
                      <i class="user icon orange"></i>
                    </div>
                  </div>
                  <div class="field">
                    <label>Région*</label>
                    <div class="ui floating dropdown labeled search icon button">
                      <i class="world icon"></i>
                      <span class="text">Région</span>
                      <div class="menu">
                        <div class="item">Rabat-Salé-Zemmour-Zaër</div>
                        <div class="item">Souss-Massa-Drâa</div>
                        <div class="item">Oued ed Dahab-Lagouira</div>
                        <div class="item">Meknès-Tafilalet</div>
                        <div class="item">Guelmim-Es Semara </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="two fields">
                  <div class="field">
                    <label>Fonction*</label>
                    <div class="ui left icon input">
                      <input placeholder="Fonction" type="text" required>
                      <i class="configure icon orange"></i>
                    </div>
                  </div>
                  <div class="field">
                    <label>Adresse*</label>
                    <div class="ui left icon input">
                      <input type="text" placeholder="Adresse" required>
                      <i class="address book icon orange"></i>
                    </div>
                  </div>
                </div>
                <div class="two fields">
                  <div class="field">
                    <label>E-mail*</label>
                    <div class="ui left icon input">
                      <input type="email" placeholder="Email" required>
                      <i class="mail outline icon orange"></i>
                    </div>
                  </div>
                  <div class="field">
                    <label>Téléphone*</label>
                    <div class="ui left icon input">
                      <input placeholder="Téléphone" type="tel" required>
                      <i class="volume control phone icon orange"></i>
                    </div>
                  </div>
                </div>
                <div class="ui one column stackable center aligned page grid">
                  <div class="column twelve wide">
                    <router-link class="ui orange right labeled icon button" to="/step2">
                    Suivant
                    <i class="right chevron icon"></i>
                    </router-link>
                  </div>
                </div>
               
                <p>Tout les champs avec * doivent être obligatoirement remplis</p>
              </div>
            </form>
         </div>

</template>

<script>
  export default {}
</script>