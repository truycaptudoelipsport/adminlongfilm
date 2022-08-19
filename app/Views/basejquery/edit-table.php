<script>
    // Editable
    function Editable(sel, options) {
        if (!(this instanceof Editable)) return new Editable(...arguments);

        const attr = (EL, obj) => Object.entries(obj).forEach(([prop, val]) => EL.setAttribute(prop, val));

        Object.assign(this, {
            onStart() {},
            onInput() {},
            onEnd() {},
            classEditing: "is-editing", // added onStart
            classModified: "is-modified", // added onEnd if content changed
        }, options || {}, {
            elements: document.querySelectorAll(sel),
            element: null, // the latest edited Element
            isModified: false, // true if onEnd the HTML content has changed
        });

        const start = (ev) => {
            this.isModified = false;
            this.element = ev.currentTarget;
            this.element.classList.add(this.classEditing);
            this.text_before = ev.currentTarget.textContent;
            this.html_before = ev.currentTarget.innerHTML;
            this.onStart.call(this.element, ev, this);
        };

        const input = (ev) => {
            this.text = this.element.textContent;
            this.html = this.element.innerHTML;
            this.isModified = this.html !== this.html_before;
            this.element.classList.toggle(this.classModified, this.isModified);
            this.onInput.call(this.element, ev, this);
        }

        const end = (ev) => {
            this.element.classList.remove(this.classEditing);
            this.onEnd.call(this.element, ev, this);
        }

        this.elements.forEach(el => {
            attr(el, {tabindex: 1, contenteditable: true});
            el.addEventListener("focusin", start);
            el.addEventListener("input", input);
            el.addEventListener("focusout", end);
        });

        return this;
    }

    // Use like:
    Editable(".editable", {
        onEnd(ev, UI) { // ev=Event UI=Editable this=HTMLElement
            if (!UI.isModified) return; // No change in content. Abort here.
            const data = {
                cid: this.dataset.cid,
                name: this.textContent, // or you can also use UI.text
            }
            var getUrl = window.location;
            var id = getUrl.pathname.split('/')[3];
            // Submit your data to server
            $.ajax({
                type:"POST",
                url: baseUri + "/product/edit/" + id ,
                data:data,
            });
        }
    });
</script>