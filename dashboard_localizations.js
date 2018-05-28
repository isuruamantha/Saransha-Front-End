i18next.init({
    lng: 'en',
    debug: true,
    resources: {
        en: {
            translation: {
                "localization-hi": "Hi",
                "localization-dasbhoard": "Dashboard",
                "localization-history": "History",
                "localization-about": "About",
                "localization_enter_your_sinhala_text": "Enter your Sinhala text",
                "localization_upload_file": "Upload file",
                "localization_number_of_line_in_summary": "Number of lines in the summary",
                "localization_number_of_keywords_in_the_word_cloud": "Number of keywords in the word cloud",
                "localization_generated_sinhala_summary": "Generated Sinhala summary",
                "localization_generated_mindmap": "Generated Mind map",
                "localization_geneerated_word_cloud": "Generated Word cloud",
                "localization_frequent_words": "Frequent words",
            }
        },
        de: {
            translation: {
                "localization-hi": "සුබ සැන්දෑවක්",
                "localization-dasbhoard": "ප්‍රධාන මෙනුව",
                "localization-history": "ඉතිහාසය",
                "localization-about": "කතෘ ගැන",
                "localization_enter_your_sinhala_text": "ඔබගේ සිංහල පාඨය ඇතුළු කරන්න",
                "localization_upload_file": "Upload file",
                "localization_number_of_line_in_summary": "සාරාංශයේ තිබිය යුතු පේලි ගණන ",
                "localization_number_of_keywords_in_the_word_cloud": "සාරාංශයේ තිබිය යුතු keywords ගණන ",
                "localization_generated_sinhala_summary": "සිංහල සාරාංශය",
                "localization_generated_mindmap": "මනෝ සිතියම",
                "localization_geneerated_word_cloud": "Generated Word cloud",
                "localization_frequent_words": "Frequent Words",
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
    document.getElementById('localization_enter_your_sinhala_text').innerHTML = i18next.t('localization_enter_your_sinhala_text');
    document.getElementById('localization_upload_file').innerHTML = i18next.t('localization_upload_file');
    document.getElementById('localization_number_of_line_in_summary').innerHTML = i18next.t('localization_number_of_line_in_summary');
    document.getElementById('localization_number_of_keywords_in_the_word_cloud').innerHTML = i18next.t('localization_number_of_keywords_in_the_word_cloud');
    document.getElementById('localization_generated_sinhala_summary').innerHTML = i18next.t('localization_generated_sinhala_summary');
    document.getElementById('localization_generated_mindmap').innerHTML = i18next.t('localization_generated_mindmap');
    document.getElementById('localization_geneerated_word_cloud').innerHTML = i18next.t('localization_geneerated_word_cloud');
    document.getElementById('localization_frequent_words').innerHTML = i18next.t('localization_frequent_words');

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
