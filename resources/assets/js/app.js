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
import VueRouter from 'vue-router';
Vue.use(VueParticles)
Vue.use(ElementUI)
Vue.use(VueRouter);

require('./bootstrap');
Vue.component('favorite', require('./components/Favorite.vue'));
new Vue().$mount('#photo_caroussel');
new Vue({
el: '#app',
data(){
var validatePass = (rule, value, callback) => {
if (value === '') {
callback(new Error('Veuillez entrer le mot de passe'));
} else {
if (this.formInline.checkPass !== '') {
this.$refs.ruleForm2.validateField('checkPass');
}
callback();
}
};
var validatePass2 = (rule, value, callback) => {
if (value === '') {
callback(new Error('Veuillez saisir à nouveau le mot de passe'));
} else if (value !== this.formInline.pass) {
callback(new Error('Deux entrées ne correspondent pas!'));
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
message: 'Veuillez entrer le nom complet de L\'association',
trigger: 'blur'
}, {
min: 2,
max: 200,
message: 'La longueur doit être de 2 à 50',
trigger: 'blur'
}],
region: [{
required: true,
message: 'Sélectionnez la region d\'activité',
trigger: 'change'
}],
fonction:[{
required: true,
message: 'Veuillez entrer votre fonction',
trigger: 'change'
}],
address: [{
required: true,
message: 'Veuillez entrer l\'adresse',
trigger: 'blur'
}, {
min: 2,
max: 200,
message: 'La longueur doit être de 2 à 50',
trigger: 'blur'
}],
email:[{
type: 'email',
message: 'Veuillez entrer l\'adresse email correcte',
trigger: 'blur,change'
},{
required: true,
message: 'Veuillez entrer l\'adresse email',
trigger: 'change'
}
],
tel:[{
required: true,
message: 'Veuillez entrer un numero de telephone',
trigger: 'blur,change'
}]
},
rules1: {
description_projet: [{
required: true,
message: 'Veuillez entrer la description du projet ',
trigger: 'blur'
}, {
min: 10,
max: 1000,
message: 'La longueur doit être de 10 à 1000',
trigger: 'blur'
}],
categorie_projet: [{
required: true,
message: 'Sélectionnez la categorie du projet',
trigger: 'change'
}],
titre_projet:[{
required: true,
message: 'Veuillez entrer le nom du projet ',
trigger: 'blur'
}]
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