<?php
    $Domande = [
        [
            'domanda' =>    "Come state implementando la recente decisione della Corte di giustizia dell'Unione europea (CGUE) relativa al diritto all'oblio?'",
            'risposta' =>   "La recente decisione della Corte di giustizia dell'Unione europea ha profonde conseguenze per i motori di ricerca in Europa. La Corte ha stabilito che alcuni utenti hanno il diritto di chiedere ai motori di ricerca come Google di rimuovere risultati relativi a chiavi di ricerca che includono il proprio nome. Per poter essere rimossi, i risultati visualizzati devono essere inadeguati, irrilevanti o non più rilevanti, o eccessivi.
                            Da quando questa decisione è stata pubblicata il 13 maggio 2014, abbiamo lavorato incessantemente per uniformarci a essa. Si tratta di una procedura complessa perché dobbiamo valutare ogni singola richiesta e effettuare un bilanciamento tra il diritto dell'individuo a controllare i suoi dati personali ed il diritto di tutti di conoscere e distribuire le informazioni.
                            Per presentare una richiesta di rimozione, compila questo modulo web. Riceverai una risposta automatica che conferma la ricezione della tua richiesta. Dopodiché valuteremo il tuo caso (tieni presente che potrebbe occorrere un po' di tempo perché abbiamo già ricevuto tante richieste simili). Nel valutare la richiesta, considereremo se i risultati includono informazioni obsolete relative alla tua vita privata. Considereremo inoltre se vi è un interesse pubblico a che le informazioni rimangano nei nostri risultati delle ricerche, ad esempio se riguardano frodi finanziarie, negligenza professionale, condanne penali o la tua condotta pubblica in relazione a un pubblico ufficio (eletto o non eletto). Queste valutazioni sono complesse e, in quanto organizzazione privata, potremmo non essere nella posizione giusta per prendere decisioni in merito al tuo caso. Se non sei d'accordo con la nostra valutazione, puoi rivolgerti all'Autorità garante per la protezione dei dati personali nel tuo paese.
                            Nei prossimi mesi lavoreremo a stretto contatto con le autorità per la protezione dei dati e con altre autorità per perfezionare il nostro approccio. La decisione della CGUE rappresenta un cambiamento significativo per i motori di ricerca. Siamo preoccupati per le sue conseguenze, ma riteniamo anche che sia importante rispettare la decisione della Corte e ci stiamo adoperando per predisporre una procedura conforme alla legge.
                            Quando cerchi un nome, potresti trovare una notifica in cui viene spiegato che i risultati potrebbero essere stati modificati nel rispetto delle leggi europee per la protezione dei dati. Mostriamo questa notifica agli utenti europei quando cercano la maggior parte dei nomi, non soltanto le pagine che sono state soggette a una rimozione."
            
        ],
        [
            'nome' => 'Mario',
            'Cognome' => 'Rossi',
            'voti' => [
                'Italiano' => "3",
                'Matematica' => "6",
                'Storia' => "3",
                'Geografia' => "3"
            ]
        ],
        [
            'nome' => 'Albano',
            'Cognome' => 'Romina',
            'voti' => [
                'Italiano' => "5",
                'Matematica' => "6",
                'Storia' => "1",
                'Geografia' => "3"
            ]
        ],
        [
            'nome' => 'Milan',
            'Cognome' => 'Inter',
            'voti' => [
                'Italiano' => "3",
                'Matematica' => "5",
                'Storia' => "8",
                'Geografia' => "1"
            ]
        ],
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <title>Faq Google</title>
</head>
<body>
    <header>
        <div class="ms_container">
            <div class="ms_topcontainer">
                <div class="ms_leftside">
                    <img class="ms_logo" src="./img/Glogo.png" alt="">
                    <span>Privacy e Termini</span>
                </div>
                <div class="ms_rightside">
                    <i class="fas fa-th"></i>
                    <button class="ms_button">Accedi</button>
                </div>
            </div>
            <div class="ms_bottomcontainer">
                <ul>
                    <li>Introduzione</li>
                    <li>Norme sulla privacy</li>
                    <li>Termini di servizio</li>
                    <li>Tecnologie</li>
                    <li class="active">Domande Frequenti</li>
                </ul>
            </div>
        </div>
    </header>

    <main>
        <div class="ms_containermain">
            <div class="ms_boxdomande">
                <h1>Domanda</h1>
                <span>Risposta</span>
            </div>
            
        </div>
    </main>
</body>
</html>