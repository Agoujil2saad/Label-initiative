<div class="row" id="searching">
    <div class=" eight wide column">
        <el-form :inline="true">
        <el-form-item label="">
        <el-input v-model="query" placeholder="search a projet"></el-input>
        </el-form-item>
        <el-form-item>
        <el-button type="primary" icon="search" @click="search()" v-if="!loading">Search</el-button>
        <el-button type="primary" :loading="true" diseabled="diseabled" v-if="loading">Searching</el-button>
        </el-form-item>
        </el-form>
        <div id="projets">
            <div class="ui negative message" v-if="error">
                <i class="close icon"></i>
                <div class="header">
                    @{{error}}
                </div>
            </div>
            <div class="card" v-for="projet in projets">
                <div class="content">
                    <a v-bind:href="'/projet/'+projet.id">@{{projet.title}}</a>
                    <p>@{{projet.description}}<p>
                        <div class="meta">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script  src="{{ mix('js/search.js') }}"></script>