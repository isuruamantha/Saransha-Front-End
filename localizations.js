i18next.init({
    lng: 'en',
    debug: true,
    resources: {
        en: {
            translation: {
                "localization-hi": "Hi",
                "localization-dasbhoard": "Dashboard",
                "localization-history": "History",
                "localization-about": "About"
            }
        },
        de: {
            translation: {
                "localization-hi": "සුබ සැන්දෑවක්",
                "localization-dasbhoard": "ප්‍රධාන මෙනුව",
                "localization-history": "ඉතිහාසය",
                "localization-about": "කතෘ ගැන"
            }
        }
    }
}, function (err, t) {
    // init set content
    updateContent();
});

function updateContent() {
    document.getElementById('localization-hi').innerHTML = i18next.t('localization-hi');
    document.getElementById('localization-dasbhoard').innerHTML = i18next.t('localization-dasbhoard');
    document.getElementById('localization-history').innerHTML = i18next.t('localization-history');
    document.getElementById('localization-about').innerHTML = i18next.t('localization-about');

}

function changeLng(lng) {
    i18next.changeLanguage(lng);
}

i18next.on('languageChanged', () => {
    updateContent();
});


function changeAppLanguage(lng) {
    localStorage.setItem("language", lng);
}

var language = localStorage.getItem("language");
if (language == "de") {
    changeLng("de")
}else{
    changeLng("en")
}
