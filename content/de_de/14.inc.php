Die Zeit im Spiel ist natürlich etwas anders als im "Reallife" (richtigen Leben).
Das Spiel rechnet mit 2 Zeiteinheiten, sogenannten Ticks, und für manches läuft in Echtzeit ab

<b>Wirtschaftsticks</b>
WT abgekürzt, sind für das eigentliche Spiel wichtig, also für Bau von Einheiten  und den Erhalt von Rohstoffen.
Sie dauern mehrere Minuten Echtzeit. Um also von Tick 1 auf Tick 2 zu gelangen, brauchen die Server einige Minuten, je nach Server.

Danach "tickt" es eine Zeiteinheit weiter. Braucht ein Schiff also 4 Ticks zur Fertigstellung, so braucht es 4x so viele  Minuten Echtzeit, wie ein Wirtschaftstick auf dem Server dauert.

<b>Kampfticks</b>
(KT) - Sie dauern in der Regel viermal so lange wie die WT und sind nur für den Kampf und das Versenden von Flotten wichtig. Hat ein Schiff beispielsweise eine Reisezeit zum Ziel von 5 Ticks, so ist das so viel Zeit, wie 20 WT, bis es sein Ziel erreicht hat (und später auch dieselbe Zeit zurück).

<b>Echtzeit</b>
Das Forschen und Bauen von Fabriken läuft in Echtzeit ab, unabhängig von den WT, eine Mission mit einer Flotte oder mit Agenten ebenso, unabhängig von den KT. Nach dem Beginn bzw. Start dauert es eine bestimmte Zeit, bis Bau, Forschung oder Mission abgeschlossen sind, auch wenn das zwischen zwei WT oder KT liegt.
Die Zeiten sind an die unterschiedlichen Tickzeiten der Server angepasst: auf Servern mit langen Tickzeiten dauern Bau, Forschung und Missionen länger als auf Servern mit kurzen Tickzeiten.


Der Unterschied zwischen WT und KT ist für die Berechnung der Kämpfe wichtig.
Es gilt KT vor WT: Erfolgen ein WT und ein KT zur selben Zeit, und werden in Bau gegebene Kampfeinheiten zum selben Tick fertig, zu dem eine angreifende Flotte einschlägt, so werden diese Einheiten <u>nicht</u> für den Kampf herangezogen; sie werden zu spät fertiggestellt. Daher sollte berücksichtigt werden, dass Bauaufträge für Einheiten bei einem feindlichen Angriff nur dann noch etwas nützen, wenn sie mindestens einen WT vor Einschlag fertig werden.

Die Tickzeiten ermöglichen eine weitere Besonderheit: Egal wann man eine Flotte startet, sie bewegt sich mit dem nächsten KT weiter. Das kann nach 10 Minuten sein, oder auch bereits nach 30 Sekunden. Je nachdem, wann der nächste KT auf dem Server erfolgt. Dies gilt ebenso für das recallen von Flotten.
Auf dem xDE-Server z.B. ist eine Flotte, die um 10:59 Uhr recalled wird, eine Stunde früher zurück als wenn dies um 11:01 geschieht. 
Das wiederum ermöglicht taktisches Vorgehen zum Binden von feindlichen Flotten. Recallt ein Angreifer unmittelbar vor Tick, so kommen die meisten Deffer nicht rechtzeitig dazu, haben einen KT länger Rückflug und können ihre Flotten damit erst einen KT später für andere Zwecke einsetzen.
Spieler, die solche Taktiken anwenden, werden als Tickrecaller bezeichnet.


<b>Tickzeiten der Server</b>
In DE gibt es verschiedene Server mit verschiedenen Tickzeiten für Spieler, die unterschiedlichen Zeitaufwand für das Spiel aufbringen können.

xDE - der ursprüngliche Hauptserver. WT 15 min, KT 60 min.
SDE - "Speed-DE" als schnelles DE gedacht. WT 3 min, KT 12 min.
RDE - ein rasanter Server. WT 1 Min, KT 4 min.
EDE - "Ewiges DE", ein Ableger von SDE, bei dem es kein Rundenende gibt. WT 3 min, KT 12 min.
CDE - "Community-DE", hier können die Spieler die Tick-Zeiten selbst wählen.
DDE - der Testserver. WT 3 min, KT von 8-23 Uhr 20 min, von 23-7 Uhr 2 Std. 

Es hat sich gezeigt, dass bei CDE seit Jahren die Ticks auf WT 1 min, KT 3 min eingestellt sind.
Die komplett anderen Tickzeiten auf dem DDE Testserver sollen Angriffe in der Nacht verhindern: nach 23 Uhr folgen nur noch Kampfticks um 1, 3, 5 und 7 Uhr. Danach ab 8 Uhr im normalen 20 Minuten-Abstand. Zudem sollen die unverhältnismäßig kurzen WT gegen über den KT einem angegriffenen Spieler die Möglichkeit geben, Einheiten mit auch längeren Bauzeiten zur Verteidigung bauen zu können, falls die Ressourcen vorhanden sind.

Zum Zeitpunkt der Erstellung dieses Hilfe-Textes läuft im Forum eine Diskussion über eine Änderung der Tickzeiten: Um Anfängern den Einstig zu erleichtern, sollen die Ticks auf ein Vielfaches 5 Minuten gerundet werden. Dadurch wird allerdings vom Prinzip 1 KT = 4 WT abgewichen. Die Diskussion ist derzeit noch in Gang.


<b>Zeitanzeige</b>
Im rechten oberen Bildschirmeck werden die aktuelle Serverzeit (SZ), der letzte Wirtschaftstick (LWT) und der letzte Kampftick (LKT) angezeigt, so dass man immer einen Überblick behält, wann es weiter geht.

Die Server Zeit (SZ) ist in Die Ewigen die Uhrzeit des Servers.

Sie kann von der realen Uhrzeit abweichen, aus diesem Grund erkennt z.B. der DI-Browser den Zeitunterschied vom eigenen PC zum Server wodurch eine sekundengenaue Anzeige möglich wird.

Ticks starten in der Regel immer genau bei Sekunde 0 allerdings brauchen die Scripts auf dem Server geringe Zeit, bis alles bearbeitet wurde. Dadurch springen die Uhren der Wirtschaftsticks (WT) und Kampfticks (KT) immer etwas später um.
