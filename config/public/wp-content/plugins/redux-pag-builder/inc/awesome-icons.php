<?php
function get_awesome_icons(){

	$icons = array(
	    'icon-adjust',
	    'icon-align-center',
	    'icon-align-justify',
	    'icon-align-left',
	    'icon-align-right',
	    'icon-arrow-down',
	    'icon-arrow-left',
	    'icon-arrow-right',
	    'icon-arrow-up',
	    'icon-asterisk',
	    'icon-backward',
	    'icon-ban-circle',
	    'icon-bar-chart',
	    'icon-beaker',
	    'icon-bell',
	    'icon-bold',
	    'icon-bolt',
	    'icon-bookmark',
	    'icon-bookmark-empty',
	    'icon-briefcase',
	    'icon-bullhorn',
	    'icon-calendar',
	    'icon-camera',
	    'icon-camera-retro',
	    'icon-caret-down',
	    'icon-caret-left',
	    'icon-caret-right',
	    'icon-caret-up',
	    'icon-certificate',
	    'icon-check',
	    'icon-check-empty',
	    'icon-chevron-down',
	    'icon-chevron-left',
	    'icon-chevron-right',
	    'icon-chevron-up',
	    'icon-circle-arrow-down',
	    'icon-circle-arrow-left',
	    'icon-circle-arrow-right',
	    'icon-circle-arrow-up',
	    'icon-cloud',
	    'icon-cog',
	    'icon-cogs',
	    'icon-columns',
	    'icon-comment',
	    'icon-comment-alt',
	    'icon-comments',
	    'icon-comments-alt',
	    'icon-copy',
	    'icon-credit-card',
	    'icon-cut',
	    'icon-dashboard',
	    'icon-download',
	    'icon-download-alt',
	    'icon-edit',
	    'icon-eject',
	    'icon-envelope',
	    'icon-envelope-alt',
	    'icon-exclamation-sign',
	    'icon-external-link',
	    'icon-eye-close',
	    'icon-eye-open',
	    'icon-facebook',
	    'icon-facebook-sign',
	    'icon-facetime-video',
	    'icon-fast-backward',
	    'icon-fast-forward',
	    'icon-file',
	    'icon-film',
	    'icon-filter',
	    'icon-fire',
	    'icon-folder-close',
	    'icon-folder-open',
	    'icon-font',
	    'icon-forward',
	    'icon-fullscreen',
	    'icon-gift',
	    'icon-github',
	    'icon-github-sign',
	    'icon-glass',
	    'icon-globe',
	    'icon-google-plus',
	    'icon-google-plus-sign',
	    'icon-group',
	    'icon-hand-down',
	    'icon-hand-left',
	    'icon-hand-right',
	    'icon-hand-up',
	    'icon-hdd',
	    'icon-heart',
	    'icon-heart-empty',
	    'icon-home',
	    'icon-inbox',
	    'icon-indent-left',
	    'icon-indent-right',
	    'icon-info-sign',
	    'icon-italic',
	    'icon-key',
	    'icon-leaf',
	    'icon-legal',
	    'icon-lemon',
	    'icon-link',
	    'icon-linkedin',
	    'icon-linkedin-sign',
	    'icon-list',
	    'icon-list-ol',
	    'icon-list-ul',
	    'icon-magic',
	    'icon-magnet',
	    'icon-map-marker',
	    'icon-minus',
	    'icon-minus-sign',
	    'icon-money',
	    'icon-move',
	    'icon-music',
	    'icon-off',
	    'icon-ok',
	    'icon-ok-circle',
	    'icon-ok-sign',
	    'icon-paper-clip',
	    'icon-paste',
	    'icon-pause',
	    'icon-pencil',
	    'icon-phone',
	    'icon-phone-sign',
	    'icon-picture',
	    'icon-pinterest',
	    'icon-pinterest-sign',
	    'icon-plane',
	    'icon-play',
	    'icon-play-circle',
	    'icon-plus',
	    'icon-plus-sign',
	    'icon-print',
	    'icon-pushpin',
	    'icon-question-sign',
	    'icon-random',
	    'icon-remove',
	    'icon-remove-circle',
	    'icon-remove-sign',
	    'icon-reorder',
	    'icon-repeat',
	    'icon-resize-full',
	    'icon-resize-horizontal',
	    'icon-resize-small',
	    'icon-resize-vertical',
	    'icon-retweet',
	    'icon-road',
	    'icon-rss',
	    'icon-save',
	    'icon-screenshot',
	    'icon-search',
	    'icon-share',
	    'icon-share-alt',
	    'icon-shopping-cart',
	    'icon-sign-blank',
	    'icon-signal',
	    'icon-signin',
	    'icon-signout',
	    'icon-sitemap',
	    'icon-sort',
	    'icon-sort-down',
	    'icon-sort-up',
	    'icon-star',
	    'icon-star-empty',
	    'icon-star-half',
	    'icon-step-backward',
	    'icon-step-forward',
	    'icon-stop',
	    'icon-strikethrough',
	    'icon-table',
	    'icon-tasks',
	    'icon-text-height',
	    'icon-text-width',
	    'icon-th',
	    'icon-th-large',
	    'icon-th-list',
	    'icon-thumbs-down',
	    'icon-thumbs-up',
	    'icon-time',
	    'icon-tint',
	    'icon-trash',
	    'icon-trophy',
	    'icon-truck',
	    'icon-twitter',
	    'icon-twitter-sign',
	    'icon-umbrella',
	    'icon-underline',
	    'icon-undo',
	    'icon-unlock',
	    'icon-upload',
	    'icon-upload-alt',
	    'icon-user',
	    'icon-user-md',
	    'icon-warning-sign',
	    'icon-wrench',
	    'icon-zoom-in',
	    'icon-zoom-out',
	);
	return $icons;
}
add_filter('redux/font-icons' , 'get_awesome_icons');

function empty_default_icons($icons){
	return '';
}
add_filter('redux-font-icons-file' , 'empty_default_icons');
