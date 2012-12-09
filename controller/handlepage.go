package controller

import (
	"net/http"
	"github.com/Nightgunner5/http2"
	"github.com/russross/blackfriday"
	"time"
)

var (
	light http2.ResponseCache
	dark  http2.ResponseCache
)

func HandlePage(w http.ResponseWriter, r *http.Request, f func() (string, string)) {
	var cache *http2.ResponseCache
	switch Style(w, r) {
	case "light":
		cache = &light
	case "dark":
		cache = &dark
	default:
		return
	}
	cache.Response(r.URL.Path, time.Minute, w, r, func(w http.ResponseWriter) {
		name, content := f()
		w.Header().Set("Content-Type", "text/html; charset=UTF-8")
		w.Write([]byte(`<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>`))
		w.Write([]byte(name))
		w.Write([]byte(` - SFLAN</title>
	<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	<link href="http://fonts.googleapis.com/css?family=Mako" rel="stylesheet" type="text/css">
	<link href="http://sflan.joelnichols.co.uk/css/cyborg.min.css" rel="stylesheet" type="text/css">
	<link href="http://sflan.joelnichols.co.uk/css/style-dark.less" rel="stylesheet" type="text/less">
	<link href="http://sflan.joelnichols.co.uk/css/font-awesome.css" rel="stylesheet" type="text/css">
	<!--[if IE 7]><link href="/css/font-awesome-ie7.css" rel="stylesheet"><![endif]-->
</head>
<body>
	<div class="main-container">
		<div class="row">
			<div class="span6">
				<h1 class="logo"><a href="/">SFLAN <small>21.12.2012</small></a></h1>
			</div>
			<div class="span6">
				<div class="right">
					<a href="javascript:document.cookie='style=dark';location.href=location.href">Dark</a>
					<a href="javascript:document.cookie='style=light';location.href=location.href">Light</a>
				</div>
				<ul class="nav nav-pills pull-right">
					<li><a href="/">Home</a></li>
					<li><a href="/attendees">Attendees</a></li>
					<li><a href="/games">Games</a></li>
					<li><a href="/music">Music</a></li>
				</ul>
			</div>
		</div>
		<hr class="head">
		<h1>`))
		w.Write([]byte(name))
		w.Write([]byte(`</h1>
	</div>
`))
		w.Write(blackfriday.MarkdownCommon([]byte(content)))
		w.Write([]byte(`
	<hr>

	<footer>
		<div class="row">
			<div class="span6">
				<p>
					<a href="/pages">Pages</a> |
					<a href="/music">Music</a> |
					<a href="/games">Games</a>
				</p>
			</div>
		</div>
		<div class="row">
			<div class="span6">
				<p>Code is poetry</p>
			</div>
			<div class="span6" style="text-align: right;">
				Site by <a href="http://www.joelnichols.co.uk">Joel Nichols</a>. View source on <a href="https://github.com/7031/SFLAN">Github</a>.
			</div>
		</div>
	</footer>
</div>
<script src="http://sflan.joelnichols.co.uk/js/jquery.js"></script>
<script src="http://sflan.joelnichols.co.uk/js/bootstrap.min.js"></script>
<script src="http://sflan.joelnichols.co.uk/js/less.js"></script>
<script>$('body').tooltip({selector:"[rel=tooltip]"})
$('.thumb-lightbox').click(function(e){e.preventDefault();var image_href=$(this).attr("href");if ($('#lightbox').length>0){$('#lbcontent').html('<img src="'+image_href+'">');$('#lightbox').show()}else{var lightbox='<div id="lightbox"><p>Click anywhere to close</p><div id="lbcontent"><img src="'+image_href+'" class="lbimage">'+'</div>'+'</div>';$('body').append(lightbox)}})
$('#lightbox').live('click',function(){$('#lightbox').hide()})</script>
</body>
</html>`))
	})
}
