webpackJsonp([0],{

/***/ 74:
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
var Component = __webpack_require__(75)(
  /* script */
  __webpack_require__(78),
  /* template */
  __webpack_require__(79),
  /* styles */
  null,
  /* scopeId */
  null,
  /* moduleIdentifier (server only) */
  null
)
Component.options.__file = "/Users/agoujilsaad/Documents/label_initiavtive/resources/assets/js/pages/step2.vue"
if (Component.esModule && Object.keys(Component.esModule).some(function (key) {return key !== "default" && key.substr(0, 2) !== "__"})) {console.error("named exports are not supported in *.vue files.")}
if (Component.options.functional) {console.error("[vue-loader] step2.vue: functional components are not supported with templates, they should use render functions.")}

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-6f3e1ef1", Component.options)
  } else {
    hotAPI.reload("data-v-6f3e1ef1", Component.options)
  }
  module.hot.dispose(function (data) {
    disposed = true
  })
})()}

module.exports = Component.exports


/***/ }),

/***/ 75:
/***/ (function(module, exports) {

/* globals __VUE_SSR_CONTEXT__ */

// this module is a runtime utility for cleaner component module output and will
// be included in the final webpack user bundle

module.exports = function normalizeComponent (
  rawScriptExports,
  compiledTemplate,
  injectStyles,
  scopeId,
  moduleIdentifier /* server only */
) {
  var esModule
  var scriptExports = rawScriptExports = rawScriptExports || {}

  // ES6 modules interop
  var type = typeof rawScriptExports.default
  if (type === 'object' || type === 'function') {
    esModule = rawScriptExports
    scriptExports = rawScriptExports.default
  }

  // Vue.extend constructor export interop
  var options = typeof scriptExports === 'function'
    ? scriptExports.options
    : scriptExports

  // render functions
  if (compiledTemplate) {
    options.render = compiledTemplate.render
    options.staticRenderFns = compiledTemplate.staticRenderFns
  }

  // scopedId
  if (scopeId) {
    options._scopeId = scopeId
  }

  var hook
  if (moduleIdentifier) { // server build
    hook = function (context) {
      // 2.3 injection
      context =
        context || // cached call
        (this.$vnode && this.$vnode.ssrContext) || // stateful
        (this.parent && this.parent.$vnode && this.parent.$vnode.ssrContext) // functional
      // 2.2 with runInNewContext: true
      if (!context && typeof __VUE_SSR_CONTEXT__ !== 'undefined') {
        context = __VUE_SSR_CONTEXT__
      }
      // inject component styles
      if (injectStyles) {
        injectStyles.call(this, context)
      }
      // register component module identifier for async chunk inferrence
      if (context && context._registeredComponents) {
        context._registeredComponents.add(moduleIdentifier)
      }
    }
    // used by ssr in case component is cached and beforeCreate
    // never gets called
    options._ssrRegister = hook
  } else if (injectStyles) {
    hook = injectStyles
  }

  if (hook) {
    var functional = options.functional
    var existing = functional
      ? options.render
      : options.beforeCreate
    if (!functional) {
      // inject component registration as beforeCreate hook
      options.beforeCreate = existing
        ? [].concat(existing, hook)
        : [hook]
    } else {
      // register for functioal component in vue file
      options.render = function renderWithStyleInjection (h, context) {
        hook.call(context)
        return existing(h, context)
      }
    }
  }

  return {
    esModule: esModule,
    exports: scriptExports,
    options: options
  }
}


/***/ }),

/***/ 78:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//

/* harmony default export */ __webpack_exports__["default"] = ({});

/***/ }),

/***/ 79:
/***/ (function(module, exports, __webpack_require__) {

module.exports={render:function (){var _vm=this;var _h=_vm.$createElement;var _c=_vm._self._c||_h;
  return _vm._m(0)
},staticRenderFns: [function (){var _vm=this;var _h=_vm.$createElement;var _c=_vm._self._c||_h;
  return _c('div', {
    staticClass: "row"
  }, [_c('div', {
    staticClass: "ui ordered steps"
  }, [_c('div', {
    staticClass: "step"
  }, [_c('div', {
    staticClass: "content"
  }, [_c('div', {
    staticClass: "title"
  }, [_vm._v("S'identifier")]), _vm._v(" "), _c('div', {
    staticClass: "description"
  }, [_vm._v("Choose your shipping options")])])]), _vm._v(" "), _c('div', {
    staticClass: "active step"
  }, [_c('div', {
    staticClass: "content"
  }, [_c('div', {
    staticClass: "title"
  }, [_vm._v("Mon projet")]), _vm._v(" "), _c('div', {
    staticClass: "description"
  }, [_vm._v("Enter billing information")])])]), _vm._v(" "), _c('div', {
    staticClass: "step"
  }, [_c('div', {
    staticClass: "content"
  }, [_c('div', {
    staticClass: "title"
  }, [_vm._v("Créer mon compte")]), _vm._v(" "), _c('div', {
    staticClass: "description"
  }, [_vm._v("Verify order details")])])])]), _vm._v(" "), _c('div', {
    staticClass: "nine wide column"
  }, [_c('form', {
    attrs: {
      "action": "post"
    }
  }, [_c('div', {
    staticClass: "ui form segment"
  }, [_c('div', {
    staticClass: "ui centered grid"
  }, [_c('div', {
    staticClass: "eight wide column"
  }, [_c('div', {
    staticClass: "field"
  }, [_c('label', [_vm._v("Catégorie*")]), _vm._v(" "), _c('select', {
    staticClass: "ui fluid dropdown"
  }, [_c('option', {
    attrs: {
      "value": ""
    }
  }, [_vm._v("Catégorie")]), _vm._v(" "), _c('option', {
    attrs: {
      "value": "AL"
    }
  }, [_vm._v("Catégorie 1")]), _vm._v(" "), _c('option', {
    attrs: {
      "value": "AK"
    }
  }, [_vm._v("Catégorie 2")]), _vm._v(" "), _c('option', {
    attrs: {
      "value": "AZ"
    }
  }, [_vm._v("Catégorie 3")])])]), _vm._v(" "), _c('div', {
    staticClass: "field"
  }, [_c('label', [_vm._v("Montant estimé en DH *")]), _vm._v(" "), _c('div', {
    staticClass: "ui left icon input"
  }, [_c('input', {
    attrs: {
      "type": "number",
      "name": "montant",
      "placeholder": "Montant...",
      "required": ""
    }
  }), _vm._v(" "), _c('i', {
    staticClass: "money icon orange"
  })])]), _vm._v(" "), _c('div', {
    staticClass: "field"
  }, [_c('label', [_vm._v("Titre du projet*")]), _vm._v(" "), _c('div', {
    staticClass: "ui left icon input"
  }, [_c('input', {
    attrs: {
      "type": "text",
      "name": "titre_du_projet",
      "placeholder": "Titre du projet",
      "required": ""
    }
  }), _vm._v(" "), _c('i', {
    staticClass: "idea icon orange"
  })])])]), _vm._v(" "), _c('div', {
    staticClass: "eight wide column"
  }, [_c('div', {
    staticClass: "field"
  }, [_c('label', [_vm._v("Décrivez-nous en détail votre projet*")]), _vm._v(" "), _c('textarea', {
    staticStyle: {
      "margin-top": "0px",
      "margin-bottom": "0px",
      "height": "168px"
    },
    attrs: {
      "required": ""
    }
  })])])]), _vm._v(" "), _c('div', {
    staticClass: "ui one column stackable center aligned page grid"
  }, [_c('div', {
    staticClass: "column twelve wide"
  }, [_c('button', {
    staticClass: "ui orange right labeled icon button"
  }, [_vm._v("\n                            Suivant\n                            "), _c('i', {
    staticClass: "right chevron icon"
  })])])]), _vm._v(" "), _c('p', [_vm._v("Tout les champs avec * doivent être obligatoirement remplis")])])])])])
}]}
module.exports.render._withStripped = true
if (false) {
  module.hot.accept()
  if (module.hot.data) {
     require("vue-hot-reload-api").rerender("data-v-6f3e1ef1", module.exports)
  }
}

/***/ })

});