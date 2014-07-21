<?php

if (!defined("APPLICATION")) {
	exit();
}

$PluginInfo["MathJax"] = array(
	"Name" => "MathJax",
	"Description" => "&quot;A display engine for mathematics that works in all modern browsers.&quot;",
	"Version" => "1",
	"Author" => "Whymarrh Whitby",
	"AuthorUrl" => "whymarrh.com",
	"License" => "WTFPL"
);

class MathJax extends Gdn_Plugin {
	public function Base_Render_Before(&$Sender) {
		$Sender->AddJsFile("https://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS-MML_HTMLorMML");
		$Sender->AddJsFile("redraw.js", "plugins/MathJax");
	}
}
