'use strict';

/**
 * Para hacer peticiones http
 */
class Request {

    constructor(urlBase = '') {
        this.get();
        this.json();
        this.urlBase = `${urlBase}`;
        this.csrf = document.getElementsByName('csrf-token')[0].getAttribute('content');
    }

    send(url, data = {}) {
        return new Promise((resolve, reject) => {

            if (this.header['Content-Type'] === 'application/json') {
                data = JSON.stringify(data);
            }

            fetch(`${this.urlBase}${url}`, {
                method: this.method,
                body: data,
                headers: {
                    ... this.header,
                    'X-CSRF-TOKEN': this.csrf
                },
                mode: 'cors',
                credentials: 'same-origin'
            })
                .then(response => response.json())
                .catch(response => reject(response))
                .then(data => resolve(data))
                .catch(response => reject(response))
        })
    }

    // Encabezados HTTP

    urlEncoded() {
        this.header = {
            'Content-Type': 'application/x-www-form-urlencoded',
        }
        return this;
    }

    json() {
        this.header = {
            'Content-Type': 'application/json'
        };
        return this;
    }

    // Métodos HTTP

    post() {
        this.method = 'post';
        return this;
    }

    delete() {
        this.method = 'delete';
        return this;
    }

    get() {
        this.method = 'get';
        return this;
    }

    put() {
        this.method = 'put';
        return this;
    }
}