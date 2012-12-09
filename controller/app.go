package controller

import (
	"strings"
	"net/http"
)

func Style(w http.ResponseWriter, r *http.Request) string {
	for _, cookie := range strings.Split(r.Header.Get("Cookie"), ";") {
		parts := strings.SplitN(cookie, "=", 2)
		if len(parts) != 2 {
			continue
		}
		k, v := strings.TrimSpace(parts[0]), strings.TrimSpace(parts[1])
		if k == "style" {
			switch v {
			case "dark", "light":
				return v
			default:
				break
			}
		}
	}

	w.Header().Add("Set-Cookie", "style=dark")

	return "dark"
}
