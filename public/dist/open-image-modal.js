const openImageModal = {
	show(obj) {

		if (typeof obj.img === "undefined") {
			console.error("`img` not defined. It must be the image tag.")
			return
		}

		const animate = (typeof obj.animate === "undefined" ? true : obj.animate)
		const src = obj.img.getAttribute("src")

		let modal = document.getElementById("open-image-modal")
		if (modal == null) {
			let html = `<!-- The Modal -->
			<div id="open-image-modal">

				<!-- Modal content -->
				<div class="open-image-modal-content ` + (animate ? 'animate' : '') + `">
					<div class="open-image-modal-header">
						<span class="open-image-modal-close">&times;</span>
					</div>

					<div class="modal-body">
						<img src="` + src + `" style="width: 100%;" />
					</div>
				</div>

			</div>`

			document.body.innerHTML += html

			setTimeout(function () {
				modal = document.getElementById("open-image-modal")
				modal.style.display = "block"

				const close = document.querySelector("#open-image-modal .open-image-modal-close")
				if (close != null) {
					close.onclick = function () {
						modal.style.display = "none"
					}
				}

				// When the user clicks anywhere outside of the modal, close it
				window.onclick = function(event) {
					if (event.target == modal) {
						modal.style.display = "none"
					}
				}
			}, 0)
		} else {
			modal.querySelector("img").setAttribute("src", src)
			modal.querySelector(".open-image-modal-content").className = "open-image-modal-content " + (animate ? 'animate' : '')
			modal.style.display = "block"
		}
	}
}