"use strict";
var KTAuthI18nDemo = (function () {
    var e,
        n,
        a = {
            "general-progress": {
                English: "Please wait...",
                Spanish: "Iniciar Sesión",
                German: "Registrarse",
                Japanese: "ログイン",
                French: "S'identifier",
            },
            "general-desc": {
                English: "Get unlimited access & earn money",
                Spanish: "Obtenga acceso ilimitado y gane dinero",
                German: "Erhalten Sie unbegrenzten Zugriff und verdienen Sie Geld",
                Japanese: "無制限のアクセスを取得してお金を稼ぐ",
                French: "Obtenez un accès illimité et gagnez de l'argent",
            },
            "general-or": {
                English: "Or",
                Spanish: "O",
                German: "Oder",
                Japanese: "または",
                French: "Ou",
            },
            "sign-in-head-desc": {
                English: "Not a Member yet?",
                Spanish: "¿No eres miembro todavía?",
                German: "Noch kein Mitglied?",
                Japanese: "まだメンバーではありませんか？",
                French: "Pas encore membre?",
            },
            "sign-in-head-link": {
                English: "Sign Up",
                Spanish: "Inscribirse",
                German: "Anmeldung",
                Japanese: "サインアップ",
                French: "S'S'inscrire",
            },
            "sign-in-title": {
                English: "Sign In",
                Spanish: "Iniciar Sesión",
                German: "Registrarse",
                Japanese: "ログイン",
                French: "S'identifier",
            },
            "sign-in-input-email": {
                English: "Email",
                Spanish: "Correo electrónico",
                German: "Email",
                Japanese: "Eメール",
                French: "E-mail",
            },
            "sign-in-input-password": {
                English: "Password",
                Spanish: "Clave",
                German: "Passwort",
                Japanese: "パスワード",
                French: "Mot de passe",
            },
            "sign-in-forgot-password": {
                English: "Forgot Password ?",
                Spanish: "Has olvidado tu contraseña ?",
                German: "Passwort vergessen ?",
                Japanese: "パスワードをお忘れですか ？",
                French: "Mot de passe oublié ?",
            },
            "sign-in-submit": {
                English: "Sign In",
                Spanish: "Iniciar Sesión",
                German: "Registrarse",
                Japanese: "ログイン",
                French: "S'identifier",
            },
            "sign-up-head-desc": {
                English: "Already a member ?",
                Spanish: "Ya eres usuario ?",
                German: "Schon ein Mitglied ?",
                Japanese: "すでにメンバーですか？",
                French: "Déjà membre ?",
            },
            "sign-up-head-link": {
                English: "Sign In",
                Spanish: "Iniciar Sesión",
                German: "Registrarse",
                Japanese: "ログイン",
                French: "S'identifier",
            },
            "sign-up-title": {
                English: "Sign Up",
                Spanish: "Inscribirse",
                German: "Anmeldung",
                Japanese: "サインアップ",
                French: "S'S'inscrire",
            },
            "sign-up-input-first-name": {
                English: "First Name",
                Spanish: "Primer nombre",
                German: "Vorname",
                Japanese: "ファーストネーム",
                French: "Prénom",
            },
            "sign-up-input-last-name": {
                English: "Last Name",
                Spanish: "Apellido",
                German: "Nachname",
                Japanese: "苗字",
                French: "Nom de famille",
            },
            "sign-up-input-email": {
                English: "Email",
                Spanish: "Correo electrónico",
                German: "Email",
                Japanese: "Eメール",
                French: "E-mail",
            },
            "sign-up-input-password": {
                English: "Password",
                Spanish: "Clave",
                German: "Passwort",
                Japanese: "パスワード",
                French: "Mot de passe",
            },
            "sign-up-input-confirm-password": {
                English: "Password",
                Spanish: "Clave",
                German: "Passwort",
                Japanese: "パスワード",
                French: "Mot de passe",
            },
            "sign-up-submit": {
                English: "Submit",
                Spanish: "Iniciar Sesión",
                German: "Registrarse",
                Japanese: "ログイン",
                French: "S'identifier",
            },
            "sign-up-hint": {
                English:
                    "Use 8 or more characters with a mix of letters, numbers & symbols.",
                Spanish:
                    "Utilice 8 o más caracteres con una combinación de letras, números y símbolos.",
                German:
                    "Verwenden Sie 8 oder mehr Zeichen mit einer Mischung aus Buchstaben, Zahlen und Symbolen.",
                Japanese: "文字、数字、記号を組み合わせた8文字以上を使用してください。",
                French:
                    "Utilisez 8 caractères ou plus avec un mélange de lettres, de chiffres et de symboles.",
            },
            "new-password-head-desc": {
                English: "Already a member ?",
                Spanish: "Ya eres usuario ?",
                German: "Schon ein Mitglied ?",
                Japanese: "すでにメンバーですか？",
                French: "Déjà membre ?",
            },
            "new-password-head-link": {
                English: "Sign In",
                Spanish: "Iniciar Sesión",
                German: "Registrarse",
                Japanese: "ログイン",
                French: "S'identifier",
            },
            "new-password-title": {
                English: "Setup New Password",
                Spanish: "Configurar nueva contraseña",
                German: "Neues Passwort einrichten",
                Japanese: "新しいパスワードを設定する",
                French: "Configurer un nouveau mot de passe",
            },
            "new-password-desc": {
                English: "Have you already reset the password ?",
                Spanish: "¿Ya has restablecido la contraseña?",
                German: "Hast du das Passwort schon zurückgesetzt?",
                Japanese: "すでにパスワードをリセットしましたか？",
                French: "Avez-vous déjà réinitialisé le mot de passe ?",
            },
            "new-password-input-password": {
                English: "Password",
                Spanish: "Clave",
                German: "Passwort",
                Japanese: "パスワード",
                French: "Mot de passe",
            },
            "new-password-hint": {
                English:
                    "Use 8 or more characters with a mix of letters, numbers & symbols.",
                Spanish:
                    "Utilice 8 o más caracteres con una combinación de letras, números y símbolos.",
                German:
                    "Verwenden Sie 8 oder mehr Zeichen mit einer Mischung aus Buchstaben, Zahlen und Symbolen.",
                Japanese: "文字、数字、記号を組み合わせた8文字以上を使用してください。",
                French:
                    "Utilisez 8 caractères ou plus avec un mélange de lettres, de chiffres et de symboles.",
            },
            "new-password-confirm-password": {
                English: "Confirm Password",
                Spanish: "Confirmar contraseña",
                German: "Passwort bestätigen",
                Japanese: "パスワードを認証する",
                French: "Confirmez le mot de passe",
            },
            "new-password-submit": {
                English: "Submit",
                Spanish: "Iniciar Sesión",
                German: "Registrarse",
                Japanese: "ログイン",
                French: "S'identifier",
            },
            "password-reset-head-desc": {
                English: "Already a member ?",
                Spanish: "Ya eres usuario ?",
                German: "Schon ein Mitglied ?",
                Japanese: "すでにメンバーですか？",
                French: "Déjà membre ?",
            },
            "password-reset-head-link": {
                English: "Sign In",
                Spanish: "Iniciar Sesión",
                German: "Registrarse",
                Japanese: "ログイン",
                French: "S'identifier",
            },
            "password-reset-title": {
                English: "Forgot Password ?",
                Spanish: "Has olvidado tu contraseña ?",
                German: "Passwort vergessen ?",
                Japanese: "パスワードをお忘れですか ？",
                French: "Mot de passe oublié ?",
            },
            "password-reset-desc": {
                English: "Enter your email to reset your password.",
                Spanish:
                    "Ingrese su correo electrónico para restablecer su contraseña.",
                German:
                    "Geben Sie Ihre E-Mail-Adresse ein, um Ihr Passwort zurückzusetzen.",
                Japanese: "メールアドレスを入力してパスワードをリセットしてください。",
                French: "Entrez votre e-mail pour réinitialiser votre mot de passe.",
            },
            "password-reset-input-email": {
                English: "Email",
                Spanish: "Correo electrónico",
                German: "Email",
                Japanese: "Eメール",
                French: "E-mail",
            },
            "password-reset-submit": {
                English: "Submit",
                Spanish: "Iniciar Sesión",
                German: "Registrarse",
                Japanese: "ログイン",
                French: "S'identifier",
            },
            "password-reset-cancel": {
                English: "Cancel",
                Spanish: "Cancelar",
                German: "Absagen",
                Japanese: "キャンセル",
                French: "Annuler",
            },
            "two-step-head-desc": {
                English: "Didn’t get the code ?",
                Spanish: "¿No recibiste el código?",
                German: "Code nicht erhalten?",
                Japanese: "コードを取得できませんでしたか？",
                French: "Vous n'avez pas reçu le code ?",
            },
            "two-step-head-resend": {
                English: "Resend",
                Spanish: "Reenviar",
                German: "Erneut senden",
                Japanese: "再送",
                French: "Renvoyer",
            },
            "two-step-head-or": {
                English: "Or",
                Spanish: "O",
                German: "Oder",
                Japanese: "または",
                French: "Ou",
            },
            "two-step-head-call-us": {
                English: "Call Us",
                Spanish: "Llámenos",
                German: "Rufen Sie uns an",
                Japanese: "お電話ください",
                French: "Appelez-nous",
            },
            "two-step-submit": {
                English: "Submit",
                Spanish: "Iniciar Sesión",
                German: "Registrarse",
                Japanese: "ログイン",
                French: "S'identifier",
            },
            "two-step-title": {
                English: "Two Step Verification",
                Spanish: "Verificación de dos pasos",
                German: "Verifizierung in zwei Schritten",
                Japanese: "2段階認証",
                French: "Vérification en deux étapes",
            },
            "two-step-deck": {
                English: "Enter the verification code we sent to",
                Spanish: "Ingresa el código de verificación que enviamos a",
                German: "Geben Sie den von uns gesendeten Bestätigungscode ein",
                Japanese: "送信した確認コードを入力してください",
                French: "Entrez le code de vérification que nous avons envoyé à",
            },
            "two-step-label": {
                English: "Type your 6 digit security code",
                Spanish: "Escriba su código de seguridad de 6 dígitos",
                German: "Geben Sie Ihren 6-stelligen Sicherheitscode ein",
                Japanese: "6桁のセキュリティコードを入力します",
                French: "Tapez votre code de sécurité à 6 chiffres",
            },
        },
        s = function (e) {
            for (var n in a)
                if (a.hasOwnProperty(n) && a[n][e]) {
                    let s = document.querySelector("[data-kt-translate=" + n + "]");
                    null !== s &&
                        ("INPUT" === s.tagName
                            ? s.setAttribute("placeholder", a[n][e])
                            : (s.innerHTML = a[n][e]));
                }
        },
        i = function (n) {
            const a = e.querySelector('[data-kt-lang="' + n + '"]');
            if (null !== a) {
                const e = document.querySelector(
                    '[data-kt-element="current-lang-name"]'
                ),
                    s = document.querySelector('[data-kt-element="current-lang-flag"]'),
                    i = a.querySelector('[data-kt-element="lang-name"]'),
                    r = a.querySelector('[data-kt-element="lang-flag"]');
                (e.innerText = i.innerText),
                    s.setAttribute("src", r.getAttribute("src")),
                    localStorage.setItem("kt_auth_lang", n);
            }
        };
    return {
        init: function () {
            null !== (e = document.querySelector("#kt_auth_lang_menu")) &&
                ((n = KTMenu.getInstance(e)),
                    (function () {
                        if (null !== localStorage.getItem("kt_auth_lang")) {
                            let e = localStorage.getItem("kt_auth_lang");
                            i(e), s(e);
                        }
                        n.on("kt.menu.link.click", function (e) {
                            let n = e.getAttribute("data-kt-lang");
                            i(n), s(n);
                        });
                    })());
        },
    };
})();
KTUtil.onDOMContentLoaded(function () {
    KTAuthI18nDemo.init();
});
