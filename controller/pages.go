package controller

import (
	"net/http"
	"github.com/7031/SFLAN/db"
)

func init() {
	http.HandleFunc("/pages/", func(w http.ResponseWriter, r *http.Request) {
		HandlePage(w, r, func() (string, string) {
			db := db.Get()
			defer db.Close()

			row := db.QueryRow("SELECT title, body FROM pages WHERE slug = ?;", r.URL.Path[len("/pages/"):])
			var name, content string
			if err := row.Scan(&name, &content); err != nil {
				return "error", "database error"
			}

			return name, content
		})
	})
}
/*
	public function add() {
		if ($this->request->is('post')) {
			if ($this->Page->save($this->request->data)) {
				$this->Session->setFlash('<div class="alert alert-success"><button class="close" data-dismiss="alert">x</button>Your page has been saved.</div>');
				$this->redirect(array('action' => 'view'));
				} else {
					$this->Session->setFlash('<div class="alert alert-error"><button class="close" data-dismiss="alert">x</button>Unable to add your post.</div>');
				}
		}
	}

	public function edit($permalink = null) {
		$page = $this->Page->findBySlug($permalink);
		if ($this->request->is('get')) {
			$this->request->data = $page;
		} else {
			if ($this->Page->save($this->request->data)) {
				$this->Session->setFlash('<div class="alert alert-success"><button class="close" data-dismiss="alert">x</button>Your page has been updated</div>');
				$this->redirect(array('action' => 'view'));
			} else {
				$this->Session->setFlash('<div class="alert alert-error"><button class="close" data-dismiss="alert">x</button>Unable to update the page.</div>');
			}
		}
	}
}*/
