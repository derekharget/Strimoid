(function() {
window["_"] = window["_"] || {};
window["_"]["tpl"] = window["_"]["tpl"] || {};

window["_"]["tpl"]["entries-widget"] = function(obj) {
obj || (obj = {});
var __t, __p = '', __e = _.escape;
with (obj) {
__p += '<div class="panel-default entry" data-id="' +
__e( hashId ) +
'">\n    <a name="' +
__e( hashId ) +
'"></a>\n    <div class="entry_avatar">\n        <img src="' +
__e( avatarPath ) +
'" alt="' +
__e( user.name ) +
'">\n    </div>\n    <div class="panel-heading entry_header" data-hover="user_widget" data-user="' +
__e( user.name ) +
'">\n        <a href="/u/' +
__e( user.name ) +
'" class="entry_author">' +
((__t = ( user.name )) == null ? '' : __t) +
'</a>\n        <span class="pull-right">\n            <span class="glyphicon glyphicon-tag"></span>\n            <a href="/g/' +
__e( group.urlname ) +
'" class="entry_group" data-hover="group_widget" data-group="' +
__e( group.urlname ) +
'">g/' +
__e( group.urlname ) +
'</a>\n            <span class="glyphicon glyphicon-time"></span>\n            <a href="/e/' +
__e( hashId ) +
'">\n                <time pubdate title="' +
__e( time ) +
'">chwilę temu</time>\n            </a>\n            <span class="voting" data-id="' +
__e( hashId ) +
'" data-state="none" data-type="entry">\n                <button type="button" class="btn btn-default btn-xs vote-btn-up">\n                    <i class="fa fa-arrow-up vote-up"></i>\n                    <span class="count">0</span>\n                </button>\n                <button type="button" class="btn btn-default btn-xs vote-btn-down">\n                    <i class="fa fa-arrow-down vote-down"></i>\n                    <span class="count">0</span>\n                </button>\n            </span>\n        </span>\n    </div>\n    <div class="entry_text md">' +
((__t = ( text )) == null ? '' : __t) +
'</div>\n    <div class="entry_actions pull-right">\n        <span class="glyphicon glyphicon-star-empty action_link save_entry" title="zapisz"></span>\n        <a class="entry_reply_link action_link">odpowiedz</a>\n        <a href="' +
__e( entryUrl ) +
'">#</a>\n    </div>\n</div>\n';

}
return __p
}})();
(function() {
window["_"] = window["_"] || {};
window["_"]["tpl"] = window["_"]["tpl"] || {};

window["_"]["tpl"]["groups-tooltip"] = function(obj) {
obj || (obj = {});
var __t, __p = '';
with (obj) {
__p += '<div class="btn-group" data-name="' +
((__t = ( groupname )) == null ? '' : __t) +
'">\n    <button class="group_subscribe_btn btn btn-sm ' +
((__t = ( subscribe_class )) == null ? '' : __t) +
'">\n        <i class="fa fa-eye"></i>\n    </button>\n    <button class="group_block_btn btn btn-sm ' +
((__t = ( block_class )) == null ? '' : __t) +
'">\n        <i class="fa fa-ban"></i>\n    </button>\n</div>\n';

}
return __p
}})();
(function() {
window["_"] = window["_"] || {};
window["_"]["tpl"] = window["_"]["tpl"] || {};

window["_"]["tpl"]["users-tooltip"] = function(obj) {
obj || (obj = {});
var __t, __p = '';
with (obj) {
__p += '<div class="btn-group" data-name="' +
((__t = ( username )) == null ? '' : __t) +
'">\n    <a href="/conversations/new/' +
((__t = ( username )) == null ? '' : __t) +
'" class="btn btn-sm btn-default">\n        <i class="fa fa-envelope"></i></a>\n    <button class="user_observe_btn btn btn-sm ' +
((__t = ( observe_class )) == null ? '' : __t) +
'">\n        <i class="fa fa-eye"></i>\n    </button>\n    <button class="user_block_btn btn btn-sm ' +
((__t = ( block_class )) == null ? '' : __t) +
'">\n        <i class="fa fa-ban"></i>\n    </button>\n</div>\n';

}
return __p
}})();