<?php
/**
 * All helper functions are bundled here
 */

function fontawesome_translate_icon($icon_name) {
	static $translated_icons = array(
		"arrow-two-head" => "arrows-h",
		"attention" => "exclamation-triangle",
		"cell-phone" => "mobile",
		"checkmark" => "check",
		"clip" => "paperclip",
		"cursor-drag-arrow" => "arrows",
		"drag-arrow" => "arrows", // admin sprite
		"delete-alt" => "times-circle",
		"delete" => "times",
		"facebook" => "facebook-square",
		"grid" => "th",
		"hover-menu" => "caret-down",
		"info" => "info-circle",
		"lock-closed" => "lock",
		"lock-open" => "unlock",
		"mail" => "envelope-o",
		"mail-alt" => "envelope",
		"print-alt" => "print fa-hover",
		"push-pin" => "thumb-tack",
		"push-pin-alt" => "thumb-tack fa-hover",
		"redo" => "share",
		"round-arrow-left" => "arrow-circle-left",
		"round-arrow-right" => "arrow-circle-right",
		"round-checkmark" => "check-circle",
		"round-minus" => "minus-circle",
		"round-plus" => "plus-circle",
		"rss" => "rss-square",
		"search-focus" => "search fa-hover",
		"settings" => "wrench",
		"settings-alt" => "cog",
		"share" => "share-alt-square",
		"shop-cart" => "shopping-cart",
		"speech-bubble" => "comment",
		"speech-bubble-alt" => "comments",
		"star-alt" => "star fa-hover",
		"star-empty" => "star-o",
		"thumbs-down-alt" => "thumbs-down fa-hover",
		"thumbs-up-alt" => "thumbs-up fa-hover",
		"trash" => "trash-o",
		"twitter" => "twitter-square",
		"undo" => "reply",
		"video" => "film",
	);
	
	if (isset($translated_icons[$icon_name])) {
		$icon_name = $translated_icons[$icon_name];
	}
	
	return $icon_name;
}