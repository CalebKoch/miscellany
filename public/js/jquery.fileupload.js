!function(e){"use strict";"function"==typeof define&&define.amd?define(["jquery","jquery-ui/ui/widget"],e):"object"==typeof exports?e(require("jquery"),require("./vendor/jquery.ui.widget")):e(window.jQuery)}((function(e){"use strict";function t(t){var i="dragover"===t;return function(n){n.dataTransfer=n.originalEvent&&n.originalEvent.dataTransfer;var r=n.dataTransfer;r&&-1!==e.inArray("Files",r.types)&&!1!==this._trigger(t,e.Event(t,{delegatedEvent:n}))&&(n.preventDefault(),i&&(r.dropEffect="copy"))}}e.support.fileInput=!(new RegExp("(Android (1\\.[0156]|2\\.[01]))|(Windows Phone (OS 7|8\\.0))|(XBLWP)|(ZuneWP)|(WPDesktop)|(w(eb)?OSBrowser)|(webOS)|(Kindle/(1\\.0|2\\.[05]|3\\.0))").test(window.navigator.userAgent)||e('<input type="file"/>').prop("disabled")),e.support.xhrFileUpload=!(!window.ProgressEvent||!window.FileReader),e.support.xhrFormDataFileUpload=!!window.FormData,e.support.blobSlice=window.Blob&&(Blob.prototype.slice||Blob.prototype.webkitSlice||Blob.prototype.mozSlice),e.widget("blueimp.fileupload",{options:{dropZone:e(document),pasteZone:void 0,fileInput:void 0,replaceFileInput:!0,paramName:void 0,singleFileUploads:!0,limitMultiFileUploads:void 0,limitMultiFileUploadSize:void 0,limitMultiFileUploadSizeOverhead:512,sequentialUploads:!1,limitConcurrentUploads:void 0,forceIframeTransport:!1,redirect:void 0,redirectParamName:void 0,postMessage:void 0,multipart:!0,maxChunkSize:void 0,uploadedBytes:void 0,recalculateProgress:!0,progressInterval:100,bitrateInterval:500,autoUpload:!0,uniqueFilenames:void 0,messages:{uploadedBytes:"Uploaded bytes exceed file size"},i18n:function(t,i){return t=this.messages[t]||t.toString(),i&&e.each(i,(function(e,i){t=t.replace("{"+e+"}",i)})),t},formData:function(e){return e.serializeArray()},add:function(t,i){if(t.isDefaultPrevented())return!1;(i.autoUpload||!1!==i.autoUpload&&e(this).fileupload("option","autoUpload"))&&i.process().done((function(){i.submit()}))},processData:!1,contentType:!1,cache:!1,timeout:0},_specialOptions:["fileInput","dropZone","pasteZone","multipart","forceIframeTransport"],_blobSlice:e.support.blobSlice&&function(){var e=this.slice||this.webkitSlice||this.mozSlice;return e.apply(this,arguments)},_BitrateTimer:function(){this.timestamp=Date.now?Date.now():(new Date).getTime(),this.loaded=0,this.bitrate=0,this.getBitrate=function(e,t,i){var n=e-this.timestamp;return(!this.bitrate||!i||n>i)&&(this.bitrate=(t-this.loaded)*(1e3/n)*8,this.loaded=t,this.timestamp=e),this.bitrate}},_isXHRUpload:function(t){return!t.forceIframeTransport&&(!t.multipart&&e.support.xhrFileUpload||e.support.xhrFormDataFileUpload)},_getFormData:function(t){var i;return"function"===e.type(t.formData)?t.formData(t.form):e.isArray(t.formData)?t.formData:"object"===e.type(t.formData)?(i=[],e.each(t.formData,(function(e,t){i.push({name:e,value:t})})),i):[]},_getTotal:function(t){var i=0;return e.each(t,(function(e,t){i+=t.size||1})),i},_initProgressObject:function(t){var i={loaded:0,total:0,bitrate:0};t._progress?e.extend(t._progress,i):t._progress=i},_initResponseObject:function(e){var t;if(e._response)for(t in e._response)e._response.hasOwnProperty(t)&&delete e._response[t];else e._response={}},_onProgress:function(t,i){if(t.lengthComputable){var n,r=Date.now?Date.now():(new Date).getTime();if(i._time&&i.progressInterval&&r-i._time<i.progressInterval&&t.loaded!==t.total)return;i._time=r,n=Math.floor(t.loaded/t.total*(i.chunkSize||i._progress.total))+(i.uploadedBytes||0),this._progress.loaded+=n-i._progress.loaded,this._progress.bitrate=this._bitrateTimer.getBitrate(r,this._progress.loaded,i.bitrateInterval),i._progress.loaded=i.loaded=n,i._progress.bitrate=i.bitrate=i._bitrateTimer.getBitrate(r,n,i.bitrateInterval),this._trigger("progress",e.Event("progress",{delegatedEvent:t}),i),this._trigger("progressall",e.Event("progressall",{delegatedEvent:t}),this._progress)}},_initProgressListener:function(t){var i=this,n=t.xhr?t.xhr():e.ajaxSettings.xhr();n.upload&&(e(n.upload).bind("progress",(function(e){var n=e.originalEvent;e.lengthComputable=n.lengthComputable,e.loaded=n.loaded,e.total=n.total,i._onProgress(e,t)})),t.xhr=function(){return n})},_deinitProgressListener:function(t){var i=t.xhr?t.xhr():e.ajaxSettings.xhr();i.upload&&e(i.upload).unbind("progress")},_isInstanceOf:function(e,t){return Object.prototype.toString.call(t)==="[object "+e+"]"},_getUniqueFilename:function(e,t){return t[e=String(e)]?(e=e.replace(/(?: \(([\d]+)\))?(\.[^.]+)?$/,(function(e,t,i){return" ("+(t?Number(t)+1:1)+")"+(i||"")})),this._getUniqueFilename(e,t)):(t[e]=!0,e)},_initXHRData:function(t){var i,n=this,r=t.files[0],o=t.multipart||!e.support.xhrFileUpload,s="array"===e.type(t.paramName)?t.paramName[0]:t.paramName;t.headers=e.extend({},t.headers),t.contentRange&&(t.headers["Content-Range"]=t.contentRange),o&&!t.blob&&this._isInstanceOf("File",r)||(t.headers["Content-Disposition"]='attachment; filename="'+encodeURI(r.uploadName||r.name)+'"'),o?e.support.xhrFormDataFileUpload&&(t.postMessage?(i=this._getFormData(t),t.blob?i.push({name:s,value:t.blob}):e.each(t.files,(function(n,r){i.push({name:"array"===e.type(t.paramName)&&t.paramName[n]||s,value:r})}))):(n._isInstanceOf("FormData",t.formData)?i=t.formData:(i=new FormData,e.each(this._getFormData(t),(function(e,t){i.append(t.name,t.value)}))),t.blob?i.append(s,t.blob,r.uploadName||r.name):e.each(t.files,(function(r,o){if(n._isInstanceOf("File",o)||n._isInstanceOf("Blob",o)){var a=o.uploadName||o.name;t.uniqueFilenames&&(a=n._getUniqueFilename(a,t.uniqueFilenames)),i.append("array"===e.type(t.paramName)&&t.paramName[r]||s,o,a)}}))),t.data=i):(t.contentType=r.type||"application/octet-stream",t.data=t.blob||r),t.blob=null},_initIframeSettings:function(t){var i=e("<a></a>").prop("href",t.url).prop("host");t.dataType="iframe "+(t.dataType||""),t.formData=this._getFormData(t),t.redirect&&i&&i!==location.host&&t.formData.push({name:t.redirectParamName||"redirect",value:t.redirect})},_initDataSettings:function(e){this._isXHRUpload(e)?(this._chunkedUpload(e,!0)||(e.data||this._initXHRData(e),this._initProgressListener(e)),e.postMessage&&(e.dataType="postmessage "+(e.dataType||""))):this._initIframeSettings(e)},_getParamName:function(t){var i=e(t.fileInput),n=t.paramName;return n?e.isArray(n)||(n=[n]):(n=[],i.each((function(){for(var t=e(this),i=t.prop("name")||"files[]",r=(t.prop("files")||[1]).length;r;)n.push(i),r-=1})),n.length||(n=[i.prop("name")||"files[]"])),n},_initFormSettings:function(t){t.form&&t.form.length||(t.form=e(t.fileInput.prop("form")),t.form.length||(t.form=e(this.options.fileInput.prop("form")))),t.paramName=this._getParamName(t),t.url||(t.url=t.form.prop("action")||location.href),t.type=(t.type||"string"===e.type(t.form.prop("method"))&&t.form.prop("method")||"").toUpperCase(),"POST"!==t.type&&"PUT"!==t.type&&"PATCH"!==t.type&&(t.type="POST"),t.formAcceptCharset||(t.formAcceptCharset=t.form.attr("accept-charset"))},_getAJAXSettings:function(t){var i=e.extend({},this.options,t);return this._initFormSettings(i),this._initDataSettings(i),i},_getDeferredState:function(e){return e.state?e.state():e.isResolved()?"resolved":e.isRejected()?"rejected":"pending"},_enhancePromise:function(e){return e.success=e.done,e.error=e.fail,e.complete=e.always,e},_getXHRPromise:function(t,i,n){var r=e.Deferred(),o=r.promise();return i=i||this.options.context||o,!0===t?r.resolveWith(i,n):!1===t&&r.rejectWith(i,n),o.abort=r.promise,this._enhancePromise(o)},_addConvenienceMethods:function(t,i){var n=this,r=function(t){return e.Deferred().resolveWith(n,t).promise()};i.process=function(t,o){return(t||o)&&(i._processQueue=this._processQueue=(this._processQueue||r([this])).then((function(){return i.errorThrown?e.Deferred().rejectWith(n,[i]).promise():r(arguments)})).then(t,o)),this._processQueue||r([this])},i.submit=function(){return"pending"!==this.state()&&(i.jqXHR=this.jqXHR=!1!==n._trigger("submit",e.Event("submit",{delegatedEvent:t}),this)&&n._onSend(t,this)),this.jqXHR||n._getXHRPromise()},i.abort=function(){return this.jqXHR?this.jqXHR.abort():(this.errorThrown="abort",n._trigger("fail",null,this),n._getXHRPromise(!1))},i.state=function(){return this.jqXHR?n._getDeferredState(this.jqXHR):this._processQueue?n._getDeferredState(this._processQueue):void 0},i.processing=function(){return!this.jqXHR&&this._processQueue&&"pending"===n._getDeferredState(this._processQueue)},i.progress=function(){return this._progress},i.response=function(){return this._response}},_getUploadedBytes:function(e){var t=e.getResponseHeader("Range"),i=t&&t.split("-"),n=i&&i.length>1&&parseInt(i[1],10);return n&&n+1},_chunkedUpload:function(t,i){t.uploadedBytes=t.uploadedBytes||0;var n,r,o=this,s=t.files[0],a=s.size,l=t.uploadedBytes,p=t.maxChunkSize||a,u=this._blobSlice,d=e.Deferred(),h=d.promise();return!(!(this._isXHRUpload(t)&&u&&(l||("function"===e.type(p)?p(t):p)<a))||t.data)&&(!!i||(l>=a?(s.error=t.i18n("uploadedBytes"),this._getXHRPromise(!1,t.context,[null,"error",s.error])):(r=function(){var i=e.extend({},t),h=i._progress.loaded;i.blob=u.call(s,l,l+("function"===e.type(p)?p(i):p),s.type),i.chunkSize=i.blob.size,i.contentRange="bytes "+l+"-"+(l+i.chunkSize-1)+"/"+a,o._trigger("chunkbeforesend",null,i),o._initXHRData(i),o._initProgressListener(i),n=(!1!==o._trigger("chunksend",null,i)&&e.ajax(i)||o._getXHRPromise(!1,i.context)).done((function(n,s,p){l=o._getUploadedBytes(p)||l+i.chunkSize,h+i.chunkSize-i._progress.loaded&&o._onProgress(e.Event("progress",{lengthComputable:!0,loaded:l-i.uploadedBytes,total:l-i.uploadedBytes}),i),t.uploadedBytes=i.uploadedBytes=l,i.result=n,i.textStatus=s,i.jqXHR=p,o._trigger("chunkdone",null,i),o._trigger("chunkalways",null,i),l<a?r():d.resolveWith(i.context,[n,s,p])})).fail((function(e,t,n){i.jqXHR=e,i.textStatus=t,i.errorThrown=n,o._trigger("chunkfail",null,i),o._trigger("chunkalways",null,i),d.rejectWith(i.context,[e,t,n])})).always((function(){o._deinitProgressListener(i)}))},this._enhancePromise(h),h.abort=function(){return n.abort()},r(),h)))},_beforeSend:function(e,t){0===this._active&&(this._trigger("start"),this._bitrateTimer=new this._BitrateTimer,this._progress.loaded=this._progress.total=0,this._progress.bitrate=0),this._initResponseObject(t),this._initProgressObject(t),t._progress.loaded=t.loaded=t.uploadedBytes||0,t._progress.total=t.total=this._getTotal(t.files)||1,t._progress.bitrate=t.bitrate=0,this._active+=1,this._progress.loaded+=t.loaded,this._progress.total+=t.total},_onDone:function(t,i,n,r){var o=r._progress.total,s=r._response;r._progress.loaded<o&&this._onProgress(e.Event("progress",{lengthComputable:!0,loaded:o,total:o}),r),s.result=r.result=t,s.textStatus=r.textStatus=i,s.jqXHR=r.jqXHR=n,this._trigger("done",null,r)},_onFail:function(e,t,i,n){var r=n._response;n.recalculateProgress&&(this._progress.loaded-=n._progress.loaded,this._progress.total-=n._progress.total),r.jqXHR=n.jqXHR=e,r.textStatus=n.textStatus=t,r.errorThrown=n.errorThrown=i,this._trigger("fail",null,n)},_onAlways:function(e,t,i,n){this._trigger("always",null,n)},_onSend:function(t,i){i.submit||this._addConvenienceMethods(t,i);var n,r,o,s,a=this,l=a._getAJAXSettings(i),p=function(){return a._sending+=1,l._bitrateTimer=new a._BitrateTimer,n=n||((r||!1===a._trigger("send",e.Event("send",{delegatedEvent:t}),l))&&a._getXHRPromise(!1,l.context,r)||a._chunkedUpload(l)||e.ajax(l)).done((function(e,t,i){a._onDone(e,t,i,l)})).fail((function(e,t,i){a._onFail(e,t,i,l)})).always((function(e,t,i){if(a._deinitProgressListener(l),a._onAlways(e,t,i,l),a._sending-=1,a._active-=1,l.limitConcurrentUploads&&l.limitConcurrentUploads>a._sending)for(var n=a._slots.shift();n;){if("pending"===a._getDeferredState(n)){n.resolve();break}n=a._slots.shift()}0===a._active&&a._trigger("stop")}))};return this._beforeSend(t,l),this.options.sequentialUploads||this.options.limitConcurrentUploads&&this.options.limitConcurrentUploads<=this._sending?(this.options.limitConcurrentUploads>1?(o=e.Deferred(),this._slots.push(o),s=o.then(p)):(this._sequence=this._sequence.then(p,p),s=this._sequence),s.abort=function(){return r=[void 0,"abort","abort"],n?n.abort():(o&&o.rejectWith(l.context,r),p())},this._enhancePromise(s)):p()},_onAdd:function(t,i){var n,r,o,s,a=this,l=!0,p=e.extend({},this.options,i),u=i.files,d=u.length,h=p.limitMultiFileUploads,c=p.limitMultiFileUploadSize,f=p.limitMultiFileUploadSizeOverhead,g=0,_=this._getParamName(p),m=0;if(!d)return!1;if(c&&void 0===u[0].size&&(c=void 0),(p.singleFileUploads||h||c)&&this._isXHRUpload(p))if(p.singleFileUploads||c||!h)if(!p.singleFileUploads&&c)for(o=[],n=[],s=0;s<d;s+=1)g+=u[s].size+f,(s+1===d||g+u[s+1].size+f>c||h&&s+1-m>=h)&&(o.push(u.slice(m,s+1)),(r=_.slice(m,s+1)).length||(r=_),n.push(r),m=s+1,g=0);else n=_;else for(o=[],n=[],s=0;s<d;s+=h)o.push(u.slice(s,s+h)),(r=_.slice(s,s+h)).length||(r=_),n.push(r);else o=[u],n=[_];return i.originalFiles=u,e.each(o||u,(function(r,s){var p=e.extend({},i);return p.files=o?s:[s],p.paramName=n[r],a._initResponseObject(p),a._initProgressObject(p),a._addConvenienceMethods(t,p),l=a._trigger("add",e.Event("add",{delegatedEvent:t}),p)})),l},_replaceFileInput:function(t){var i=t.fileInput,n=i.clone(!0),r=i.is(document.activeElement);t.fileInputClone=n,e("<form></form>").append(n)[0].reset(),i.after(n).detach(),r&&n.focus(),e.cleanData(i.unbind("remove")),this.options.fileInput=this.options.fileInput.map((function(e,t){return t===i[0]?n[0]:t})),i[0]===this.element[0]&&(this.element=n)},_handleFileTreeEntry:function(t,i){var n,r=this,o=e.Deferred(),s=[],a=function(e){e&&!e.entry&&(e.entry=t),o.resolve([e])},l=function(){n.readEntries((function(e){e.length?(s=s.concat(e),l()):function(e){r._handleFileTreeEntries(e,i+t.name+"/").done((function(e){o.resolve(e)})).fail(a)}(s)}),a)};return i=i||"",t.isFile?t._file?(t._file.relativePath=i,o.resolve(t._file)):t.file((function(e){e.relativePath=i,o.resolve(e)}),a):t.isDirectory?(n=t.createReader(),l()):o.resolve([]),o.promise()},_handleFileTreeEntries:function(t,i){var n=this;return e.when.apply(e,e.map(t,(function(e){return n._handleFileTreeEntry(e,i)}))).then((function(){return Array.prototype.concat.apply([],arguments)}))},_getDroppedFiles:function(t){var i=(t=t||{}).items;return i&&i.length&&(i[0].webkitGetAsEntry||i[0].getAsEntry)?this._handleFileTreeEntries(e.map(i,(function(e){var t;return e.webkitGetAsEntry?((t=e.webkitGetAsEntry())&&(t._file=e.getAsFile()),t):e.getAsEntry()}))):e.Deferred().resolve(e.makeArray(t.files)).promise()},_getSingleFileInputFiles:function(t){var i,n,r=(t=e(t)).prop("webkitEntries")||t.prop("entries");if(r&&r.length)return this._handleFileTreeEntries(r);if((i=e.makeArray(t.prop("files"))).length)void 0===i[0].name&&i[0].fileName&&e.each(i,(function(e,t){t.name=t.fileName,t.size=t.fileSize}));else{if(!(n=t.prop("value")))return e.Deferred().resolve([]).promise();i=[{name:n.replace(/^.*\\/,"")}]}return e.Deferred().resolve(i).promise()},_getFileInputFiles:function(t){return t instanceof e&&1!==t.length?e.when.apply(e,e.map(t,this._getSingleFileInputFiles)).then((function(){return Array.prototype.concat.apply([],arguments)})):this._getSingleFileInputFiles(t)},_onChange:function(t){var i=this,n={fileInput:e(t.target),form:e(t.target.form)};this._getFileInputFiles(n.fileInput).always((function(r){n.files=r,i.options.replaceFileInput&&i._replaceFileInput(n),!1!==i._trigger("change",e.Event("change",{delegatedEvent:t}),n)&&i._onAdd(t,n)}))},_onPaste:function(t){var i=t.originalEvent&&t.originalEvent.clipboardData&&t.originalEvent.clipboardData.items,n={files:[]};i&&i.length&&(e.each(i,(function(e,t){var i=t.getAsFile&&t.getAsFile();i&&n.files.push(i)})),!1!==this._trigger("paste",e.Event("paste",{delegatedEvent:t}),n)&&this._onAdd(t,n))},_onDrop:function(t){t.dataTransfer=t.originalEvent&&t.originalEvent.dataTransfer;var i=this,n=t.dataTransfer,r={};n&&n.files&&n.files.length&&(t.preventDefault(),this._getDroppedFiles(n).always((function(n){r.files=n,!1!==i._trigger("drop",e.Event("drop",{delegatedEvent:t}),r)&&i._onAdd(t,r)})))},_onDragOver:t("dragover"),_onDragEnter:t("dragenter"),_onDragLeave:t("dragleave"),_initEventHandlers:function(){this._isXHRUpload(this.options)&&(this._on(this.options.dropZone,{dragover:this._onDragOver,drop:this._onDrop,dragenter:this._onDragEnter,dragleave:this._onDragLeave}),this._on(this.options.pasteZone,{paste:this._onPaste})),e.support.fileInput&&this._on(this.options.fileInput,{change:this._onChange})},_destroyEventHandlers:function(){this._off(this.options.dropZone,"dragenter dragleave dragover drop"),this._off(this.options.pasteZone,"paste"),this._off(this.options.fileInput,"change")},_destroy:function(){this._destroyEventHandlers()},_setOption:function(t,i){var n=-1!==e.inArray(t,this._specialOptions);n&&this._destroyEventHandlers(),this._super(t,i),n&&(this._initSpecialOptions(),this._initEventHandlers())},_initSpecialOptions:function(){var t=this.options;void 0===t.fileInput?t.fileInput=this.element.is('input[type="file"]')?this.element:this.element.find('input[type="file"]'):t.fileInput instanceof e||(t.fileInput=e(t.fileInput)),t.dropZone instanceof e||(t.dropZone=e(t.dropZone)),t.pasteZone instanceof e||(t.pasteZone=e(t.pasteZone))},_getRegExp:function(e){var t=e.split("/"),i=t.pop();return t.shift(),new RegExp(t.join("/"),i)},_isRegExpOption:function(t,i){return"url"!==t&&"string"===e.type(i)&&/^\/.*\/[igm]{0,3}$/.test(i)},_initDataAttributes:function(){var t=this,i=this.options,n=this.element.data();e.each(this.element[0].attributes,(function(e,r){var o,s=r.name.toLowerCase();/^data-/.test(s)&&(s=s.slice(5).replace(/-[a-z]/g,(function(e){return e.charAt(1).toUpperCase()})),o=n[s],t._isRegExpOption(s,o)&&(o=t._getRegExp(o)),i[s]=o)}))},_create:function(){this._initDataAttributes(),this._initSpecialOptions(),this._slots=[],this._sequence=this._getXHRPromise(!0),this._sending=this._active=0,this._initProgressObject(this),this._initEventHandlers()},active:function(){return this._active},progress:function(){return this._progress},add:function(t){var i=this;t&&!this.options.disabled&&(t.fileInput&&!t.files?this._getFileInputFiles(t.fileInput).always((function(e){t.files=e,i._onAdd(null,t)})):(t.files=e.makeArray(t.files),this._onAdd(null,t)))},send:function(t){if(t&&!this.options.disabled){if(t.fileInput&&!t.files){var i,n,r=this,o=e.Deferred(),s=o.promise();return s.abort=function(){return n=!0,i?i.abort():(o.reject(null,"abort","abort"),s)},this._getFileInputFiles(t.fileInput).always((function(e){n||(e.length?(t.files=e,(i=r._onSend(null,t)).then((function(e,t,i){o.resolve(e,t,i)}),(function(e,t,i){o.reject(e,t,i)}))):o.reject())})),this._enhancePromise(s)}if(t.files=e.makeArray(t.files),t.files.length)return this._onSend(null,t)}return this._getXHRPromise(!1,t&&t.context)}})}));
