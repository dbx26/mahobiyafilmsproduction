// App settings default (light theme only - no dark)
let appSettings = {
	appTheme: 'light',
	appSidebar: 'mini',
	appColor: 'blue',
};

// Update settings
function setAppSettings(newSettings = {}) {
	appSettings = {
		...appSettings,
		...newSettings
	};
	applySettings();
}

// Apply settings to DOM (always light theme)
function applySettings() {
	document.documentElement.setAttribute("data-bs-theme", "light");

	if (window.innerWidth >= 1480) {
		document.documentElement.setAttribute("data-app-sidebar", appSettings.appSidebar);
	}

	document.documentElement.setAttribute("data-color-theme", appSettings.appColor);
}

// Initialize
document.addEventListener("DOMContentLoaded", applySettings);
window.setAppSettings = setAppSettings;