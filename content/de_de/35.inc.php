<b>Kampfscript</b>

Die Hilfe zum Kampfscript ist in drei Teile unterteilt:


<b>1. Support im Kampfscript</b>

Im Kampfscript gibt es drei Supportkomplexe, die unterschiedliche Auswirkungen haben.

A) Der Jagdbootsupport. Er beschreibt die Abhängigkeit der Jagdboote von den Großkampfschiffen.
B) Der Jägersupport. Großkampfschiffe benötigen im Kampf Deckung durch Jäger, um ihre Waffensysteme effektiv einsetzen zu können.
C) Der Schlachtschiffsupport. Er beschreibt die Abhängigkeit der Schlachtschiffe von Kreuzern und Zerstörern, um eine höhere Geschwindigkeit aufnehmen zu können. Dies hat jedoch nur indirekten Einfluss auf die Kampfkraft eines Schlachtschiffes; wenn die Flotte bei Tick nicht beim Ziel ist, nimmt sie am Kampf eben nicht teil.


<b>2. Grundlagen der Kampfberechnung</b>

Auf der Produktionsseite (Menü "Produktion") und der Flottenaufstellungsseite (Menü "Flotte") sind ingame jeweils oberflächliche  Informationen zu den Einheiten zu finden. Dort ist angegeben, ob eine Einheit konventionelle Waffen und EMP Waffen besitzt, ebenso wie dort das jeweilige Primär- und Sekundärziel zu finden ist.
Exakte Werte über Kampfkraft, Panzerung, Angriffsreihenfolge und Effizienz sind detailliert in den Einheiteninformationen aufgelistet (Menü "Produktion / Einheiteninformationen"). Von hier sind auch die Zahlen für die unten angeführten Beispiele entnommen.

<b>Kampfablauf</b>
Die Ziele werden in der angegebenen Reihenfolge mit der angegebenen Wirkung der Einheit angegriffen. Beide Parteien greifen einander gleichzeitig an. Erst werden die EMP-Waffen benutzt, dann die konventionellen Waffen.
Es schießen immer alle Einheiten, die nicht geblockt worden sind. Auch wenn der Angreifer z.B. alle Türme zerstört, so schießen diese trotzdem vorher noch.
Boni/Mali werden vor dem Kampf berechnet.

Es wird in jener Reihenfolge gefeuert, die im Menü "Produktion / Einheiteninformationen" vorgegeben ist.

Die EMP-Waffen wirken ausschließlich auf die konventionellen Waffen. Ein geblocktes Schiff kann nicht mehr seine konventionellen Waffen abfeuern, alle anderen Funktionen (Support von anderen Einheiten, Schlachtschiffrecycling) arbeiten weiterhin unberührt.

Der Punktewert einer Einheit ist für den Kampf <u>nicht</u> maßgeblich, aber er ermöglicht ein rasches, einfaches Abschätzen der Flottenstärken. (Der Punktewert einer Einheit beträgt 10%  der Baukosten in Multiplex; z.B. eine Hornisse kostet 1000 Multiplex und 250 Dyharra, das sind 1000 + 2*250 = 1500, sie hat also 150 Punkte.)

Maßgeblich für die Berechnung des Kampfergebnisses sind die Werte der konventionellen Waffen und die Trefferpunkte. Ein Schiff gilt als zerstört, wenn es so viele Treffer erhält, wie es Trefferpunkte hat. Mit beschädigten Schiffen wird nicht gerechnet. Es gibt nur zerstört oder nicht zerstört.

<i>Beispiel: Eine Hornisse hat einen Waffenwert von 4, und sie hat 15 Trefferpunkte. Daher braucht man vier Hornissen, um eine Hornisse zu zerstören. Wäre die Angriffs-Effizienz nicht 100% sondern niedriger, bräuchte man noch mehr Hornissen als vier.
Zu beachten ist hier auch mangelnder Support, der die Feuerkraft auf bis zu 50% einschränken kann.</i>

Ähnlich wird das Blocken berechnet, das noch vor dem Abfeuern der konventionellen Waffen stattfindet: Die EMP-Waffen wirken auf die konventionellen Waffen. Ein geblocktes Schiff nimmt am Kampf nicht teil.

<i>Beispiel: Eine Tarantula hat einen Waffenwert von 188, den es zu blocken gilt. Dies wird durch 24 Guillotinen erreicht, oder durch 16 Paladine, da ein Paladin eine Blockkraft von 12 hat, eine Guillotine dagegen nur 8; aber beide blocken Kreuzer mit einer Effizienz von 100%, ansonsten bräuchte man entsprechend mehr Jagdboote.
Beachte auch hier, dass nur bis zu 500 Jagdboote ohne Support auskommen. Alle Jagdboote, die mehr als 500 sind, brauchen Support durch Kreuzer, Träger oder Schlachtschiffe, ansonsten beträgt ihre Lähmkraft (und ihre Feuerkraft) nur 50%.</i>

<b>Artefakte und Allianzprojekte</b>
Mitgeführte Basisschiffartefakte können sich je nach Artefakt verstärkend auf die Feuerkraft und die Blockkraft der Schiffe auswirken, ebenso können sie die Schilde gegen EMP-Waffen der Türme des Angriffsziels schwächen. Es gibt andererseits auch Artefakte, die die Feuerkraft und die Blockkraft von Türmen verstärken. (Menü: "Artefakte").
Auch die Allianz kann mittels der Allianzprojekte Leitzentralen Feuroka und Bloroka die Feuerkraft und die Blockkraft von Flotten ihrer Mitglieder verstärken. (Menü: "Allianz / Projekte").

<b>Sieg oder Niederlage</b>
Die verlorenen <u>Hitpoints</u>, also die Trefferpunkte, sind für das Kampfergebnis entscheidend: Der Gewinner eines Kampfes wird über einen Vergleich des erlittenen Schadens zur eingesetzten Flotte berechnet.
Wer weniger <u>Verluste an Trefferpunkten im Verhältnis zu den Trefferpunkten der eingesetzten Einheiten</u> hat, gewinnt den Kampf.
Wichtig zu bemerken: Es zählt damit der interne Wert der <i>Panzerung</i> einer Einheit, nicht deren Energiewert, und auch nicht der Waffenwert oder EMP-Wert.


<b>3. Rassenboni und -mali</b>

Die exakten Werte der Einheiten sind in den Einheiteninformationen aufgelistet (Menü: "Produktion / Einheiteninformationen"). Hier soll nur ein genereller Überblick über die Stärken und Schwächen der einzelnen Rassen gegeben werden.

Die Ewigen:
Keinerlei Boni oder Mali, aber Jagdboote sind einen KT schneller als die Jagdboote aller anderen Rassen.

Ishtar:
Boni auf EMP Waffen, Jagdbootsupport und Verteidigungsanlagen.
Malus bei Konventionelle Waffen.

K'Tharr:
Bonus auf Konventionelle Waffen.
Mali bei Panzerung, EMP Waffen und Jagdbootsupport.

Z'tah-ara:
Boni auf Panzerung und Jagdbootsupport.
Malus auf Konventionelle Waffen.
Die Stärke von Z'tah-ara liegt in der Spionage, nicht im Kampf.


<b>4. Besonderheiten</b>

- Die Kollektorengrenze wird für jede Flotte einzeln berechnet. Daraus kann resultieren, dass die erste Flotte Kollektoren erhält, man damit über die Grenze kommt und keine weiteren mehr erhält (dies gilt auch dann, wenn alle Flotten dasselbe Ziel angreifen). Hier wird empfohlen alle Schiffe in einer Flotte zu schicken.

- Alle Flotten im Heimatsystem erhalten einen gemeinsamen Kampfbericht, jedoch erfolgt die Berechnung getrennt. Daraus kann resultieren, dass man zwar genug Punkte für ein Kriegsartefakt verloren hat, aber keins erhält. Hier wird empfohlen, alle Schiffe in eine Flotte zu transferieren.


Siehe auch:
<a href="https://help.bgam.es/index.php?thread=de_de&post=34">Jägersupport</a> für Großkampfschiffe
<a href="https://help.bgam.es/index.php?thread=de_de&post=33">Jagdbootsupport</a> für Jagdboote
<a href="https://help.bgam.es/index.php?thread=de_de&post=5">Artefakte</a> für Flotten und Türme
<a href="https://help.bgam.es/index.php?thread=de_de&post=3">Allianz</a>projekte für die Flotten ihrer Mitglieder