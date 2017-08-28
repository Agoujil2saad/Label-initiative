 import Vue from 'vue';
 import VueFormWizard from 'vue-form-wizard'
 import 'vue-form-wizard/dist/vue-form-wizard.min.css'
 import VueFormGenerator from "vue-form-generator/dist/vfg-core.js";
 import "vue-form-generator/dist/vfg-core.css";
Vue.use(VueFormWizard)
Vue.use(VueFormGenerator)
import ElementUI from 'element-ui'
import 'element-ui/lib/theme-default/index.css'
import VueParticles from 'vue-particles'
import VueResource from 'vue-resource';

Vue.use(VueResource);
Vue.use(VueParticles)


Vue.use(ElementUI)

import VueRouter from 'vue-router';
Vue.use(VueRouter);
require('./bootstrap');

new Vue({
  el:'#message_principale'
});
new Vue().$mount('#photo_caroussel');    
new Vue({
  el: '#app',
  data(){

  	 var validatePass = (rule, value, callback) => {
        if (value === '') {
          callback(new Error('Please input the password'));
        } else {
          if (this.formInline.checkPass !== '') {
            this.$refs.ruleForm2.validateField('checkPass');
          }
          callback();
        }
      };
      var validatePass2 = (rule, value, callback) => {
        if (value === '') {
          callback(new Error('Please input the password again'));
        } else if (value !== this.formInline.pass) {
          callback(new Error('Two inputs don\'t match!'));
        } else {
          callback();
        }
      };
return {

    formInline: {
      name: '',
      region: '',
      categorie:'',
      fonction:'',
      email:'',
      address:'',
      tel:'',
      description_projet:'',
      titre_projet:'',
      montant_projet:'',
      categorie_projet:'',
      pass:'',
      checkPass:'',
    },
   rules: {
      name: [{
        required: true,
        message: 'Please input complet name',
        trigger: 'blur'
      }, {
        min: 3,
        max: 5,
        message: 'Length should be 3 to 5',
        trigger: 'blur'
      }],
      region: [{
        required: true,
        message: 'Please select Activity zone',
        trigger: 'change'
      }],
    },

       rules1: {
      description_projet: [{
        required: true,
        message: 'Please input description_projet ',
        trigger: 'blur'
      }, {
        min: 3,
        max: 5,
        message: 'Length should be 3 to 5',
        trigger: 'blur'
      }],
      categorie_projet: [{
        required: true,
        message: 'Please select Activity zone',
        trigger: 'change'
      }],
    },
    rules2: {
          pass: [
            { validator: validatePass, trigger: 'blur' }
          ],
          checkPass: [
            { validator: validatePass2, trigger: 'blur' }
          ],
        }
  }
}
,
  methods: {
    onComplete: function() {
      axios.post('/deposer',this.$data.formInline).
      then(function(response){
    window.location = response.data.redirect;
      });
      
    },
    validateFirstStep() {
      return new Promise((resolve, reject) => {
        this.$refs.ruleForm.validate((valid) => {
          resolve(valid);
        });
      })
    },
     validateSecondStep() {
      return new Promise((resolve, reject) => {
        this.$refs.ruleForm1.validate((valid) => {
          resolve(valid);
        });
      })
    },
    validateThirdStep() {
      return new Promise((resolve, reject) => {
        this.$refs.ruleForm2.validate((valid) => {
          resolve(valid);
        });
      })
    },
       



  }
});

new Vue({
  el:"#searching",
  data:{
    projets: [],
    loading: false,
    error: false,
    query: ''
  },
  methods: {
    search: function() {
        // Clear the error message.
        this.error = '';
        // Empty the projets array so we can fill it with the new projets.
        this.projets = [];
        // Set the loading property to true, this will display the "Searching..." button.
        this.loading = true;

        // Making a get request to our API and passing the query to it.
        this.$http.get('/api/search?q=' + this.query).then((response) => {
            // If there was an error set the error message, if not fill the projets array.
            response.body.error ? this.error = response.body.error : this.projets = response.body;
            // The request is finished, change the loading to false again.
            this.loading = false;
            // Clear the query.
            this.query = '';
        });
    }
}
});
