package font

import (
	"github.com/Nightgunner5/http2"
	"net/http"
	"time"
)

func init() {
	var (
		cache http2.ResponseCache
		files = map[string][]byte{
			"/font/fontawesome-webfont.eof":  Eof,
			"/font/fontawesome-webfont.svg":  Svg,
			"/font/fontawesome-webfont.ttf":  Ttf,
			"/font/fontawesome-webfont.woff": Woff,
		}
	)

	http.HandleFunc("/font/", func(w http.ResponseWriter, r *http.Request) {
		cache.Response(r.URL.Path, 240*time.Hour, w, r, func(w http.ResponseWriter) {
			f, ok := files[r.URL.Path]
			if !ok {
				http.NotFound(w, r)
				return
			}
			w.Header().Set("Content-Type", "application/octet-stream")
			w.Write(f)
		})
	})
}
