@extends('layouts.master_1')
@section('content')
@include('layouts.errors')
<div class="row" id="app">
    <form-wizard @on-complete="onComplete"
    shape="circle"
    color="#ff6600"
    error-color="#ff4949"
    title=""
    subtitle=""
       >
      <tab-content title="information personelle" icon="el-icon-edit" :before-change="validateFirstStep">

        <el-form  label-width="120px"   :model="formInline" class="ui form segment" :rules="rules" ref="ruleForm">
        

        <el-form-item label="*Type de l'association" prop="categorie">

            <el-select v-model="formInline.categorie" placeholder="Type de l'association" icon="el-icon-edit">
              <el-option label="type 1" value="type1"></el-option>
              <el-option label="type 2" value="type2"></el-option>
              <el-option label="type 3" value="type3"></el-option>
              <el-option label="type 4" value="type4"></el-option>
            </el-select>
            
          </el-form-item>

     
          <el-form-item label="*Region" prop="region">
            <el-select v-model="formInline.region" placeholder="Region">
              <el-option label="reg1" value="reg1"></el-option>
              <el-option label="reg2" value="reg2"></el-option>
            </el-select>
          </el-form-item>

   

 <el-form-item label="*Nom Complet" prop="name">
            <el-input v-model="formInline.name" placeholder="Nom complet" icon="name"  ></el-input>
 </el-form-item>

<el-form-item label="*Fonction" prop="fonction">
            <el-input v-model="formInline.fonction" placeholder="fonction"></el-input>
 </el-form-item>


<el-form-item label="*Email" prop="email">
            <el-input v-model="formInline.email" placeholder="email"></el-input>
 </el-form-item>

<el-form-item label="*Adresse" prop="address">
            <el-input v-model="formInline.address" placeholder="adress"></el-input>
 </el-form-item>

<el-form-item label="*Telephone" prop="tel">
            <el-input v-model="formInline.tel" placeholder="Telephone"></el-input>
 </el-form-item>

        </el-form>
      </tab-content>

      <tab-content title="Mon projet" icon="el-icon-setting"
      :before-change="validateSecondStep">
 <el-form  label-width="120px"   :model="formInline" class="ui form segment" :rules="rules1" ref="ruleForm1">
       

<el-form-item label="*Type de projet" prop="categorie_projet">
            <el-select v-model="formInline.categorie_projet" placeholder="categorie de projet" icon="el-icon-edit">
              <el-option label="type 1" value="type1"></el-option>
              <el-option label="type 2" value="type2"></el-option>
              <el-option label="type 3" value="type3"></el-option>
              <el-option label="type 4" value="type4"></el-option>
            </el-select>
</el-form-item>

        <el-form-item label="*Nom du projet" prop="titre_projet">
  <el-input v-model="formInline.titre_projet" placeholder="categorie_projet complet de projet" >
  	
  </el-input>
       
          </el-form-item>

  
   

 <el-form-item label="*Montant estimé en DH " prop="montant_projet">
          <el-input-number v-model="formInline.montant_projet"  :min="2000" :max="70000"></el-input-number>
 </el-form-item>



<el-form-item label="*Description_projet" prop="description_projet">
         <el-input
  type="textarea"
  :rows="2"
  placeholder="decriver votre projet"
  v-model="formInline.description_projet">
</el-input>
 </el-form-item>

        </el-form>
      </tab-content>
      <tab-content title="Creer mon compte" icon="el-icon-check" :before-change="validateThirdStep">

  <el-form :model="formInline" :rules="rules2" ref="ruleForm2" label-width="120px" class="ui form segment">

  <el-form-item label="Password" prop="pass">
    <el-input type="password" v-model="formInline.pass"></el-input>
  </el-form-item>

  <el-form-item label="Confirm" prop="checkPass">
    <el-input type="password" v-model="formInline.checkPass"></el-input>
  </el-form-item>

</el-form>
      </tab-content>

      <button class="ui orange left labeled icon button"  type="primary" slot="prev">

      Precedent
      <i class="left chevron icon"></i>
      </button>

      <button class="ui orange right labeled icon button" type="primary" slot="next">
      Suivant
      <i class="right chevron icon"></i>
      </button>

      <button class="ui orange right labeled icon button" type="primary" slot="finish">
      Creer mon compte
      <i class="idea icon"></i>
      </button>

    </form-wizard>
  </div>

@endsection
