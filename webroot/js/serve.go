package js

import (
	"github.com/Nightgunner5/http2"
	"net/http"
	"time"
)

func init() {
	var (
		cache http2.ResponseCache
		files = map[string][]byte{
			"bootstrap.min.js": []byte(Bootstrap),
			"jquery.js":        []byte(JQuery),
			"less.js":          []byte(Less),
		}
	)

	http.HandleFunc("/js/", func(w http.ResponseWriter, r *http.Request) {
		cache.Response(r.URL.Path, 240*time.Hour, w, r, func(w http.ResponseWriter) {
			f, ok := files[r.URL.Path]
			if !ok {
				http.NotFound(w, r)
				return
			}
			w.Header().Set("Content-Type", "application/javascript; charset=UTF-8")
			w.Write(f)
		})
	})
}
