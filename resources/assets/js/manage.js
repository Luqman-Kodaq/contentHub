const accordions = document.getElementByClassName('submenu')

function setMenuStyles (menu, maxHeight, margins) {
  menu.style.maxHeight = maxHeight
  menu.style.marginTop = margins
  menu.style.marginBottom = margins
}


for (var i = 0; i < accordions.length; i++) {
	if (accordions[i].classList.contains('active')) {
		const menu = accordions[i].nextElementSibling;
		setmenuStyles(menu, menu.scrollHeight + "px", "0.75em")
	}

	accordions[i].onclick = function () {
		this.classList.toggle('active')

		const menu = this.nextElementSibling
		if (menu.style.maxHeight) {
      // menu is open, we need to close it now
			setmenuStyles(menu, null, null)
		} else {
      // menu is close, so we need to open it
      		setmenuStyles(menu, menu.scrollHeight + "px", "0.75em")
		}
	}
};