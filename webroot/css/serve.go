package css

import (
	"github.com/Nightgunner5/http2"
	"net/http"
	"time"
)

func init() {
	var (
		cache http2.ResponseCache
		files = map[string][]byte{
			"/css/bootstrap.min.css":    []byte(Bootstrap),
			"/css/font-awesome.css":     []byte(Awesome),
			"/css/style-light.css":      []byte(StyleLight),
			"/css/style-dark.css":       []byte(StyleDark),
			"/css/cake.generic.css":     []byte(Cake),
			"/css/font-awesome-ie7.css": []byte(AwesomeIE7),
			"/css/cyborg.min.css":       []byte(Cyborg),
			"/css/global.css":           []byte(Global),
		}
	)

	http.HandleFunc("/css/", func(w http.ResponseWriter, r *http.Request) {
		cache.Response(r.URL.Path, 240*time.Hour, w, r, func(w http.ResponseWriter) {
			f, ok := files[r.URL.Path]
			if !ok {
				http.NotFound(w, r)
				return
			}
			w.Header().Set("Content-Type", "text/css; charset=UTF-8")
			w.Write(f)
		})
	})
}
