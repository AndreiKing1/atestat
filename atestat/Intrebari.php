<html lang="ro-RO">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta charset="utf-8" />
        <title>Formular</title>
       <style> article {
          width: 20%;
    border: 20% solid #ccc;
    padding: 10%;
    background: #fff;
    border-radius: 5%;
margin-left: 0%;
  background-color: #fff;
  opacity: 0.8;
     }
     h1 {
	text-align: center;
	color: #000000;
}

</style>
</style>
    </head>
    <body>
    <style type="text/css">
        body {
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            background-image: url(poze/final.webp);
        }
    </style>
    <article>
        <br>
        <table align="centre">
            <tr>
                <td style="width: 100px;">
                    <form>
                        <fieldset style="width: 100px;">
                            <div>
                                <label>Care este suprafa&#539;a Deltei &icirc;n momentul actual?</label><br><br>
                                <label>a)Peste 5700 km&sup2;</label><br><br>
                                <label>b)Peste 6000 km&sup2;</label><br><br>
                                <label>c)6300 km&sup2;</label><br><br>
                                <label>d)5300 km&sup2;</label><br><br>
                                <input id="a" type="text"><br><br>
                            </div>

                            <div>
                                <label>C&acirc;te tipuri de plante &#537;i animale exist&#259; &icirc;n Delta Dun&#259;rii?</label><br><br>
                                <label>a)peste 5000</label><br><br>
                                <label>b)peste 2000</label><br><br>
                                <label>c)peste 200</label><br><br>
                                <label>d)peste 10000</label><br><br>
                                <input id="b" type="text"><br><br>
                            </div>

                            <div>
                                <label>Ce &icirc;nsemna cuv&acirc;ntul ban &icirc;n cele mai vechi timpuri?</label><br><br>
                                <label>a)Guvernator</label><br><br>
                                <label>b)Avere</label><br><br>
                                <label>c)Primar</label><br><br>
                                <label>d)Ve&#537;nicie</label><br><br>
                                <input id="c" type="text"><br><br>
                            </div>

                            <div>
                                <label>Din punct de vedere turistic care este cel mai important aspect al regiunii Cri&#537;ana?</label><br><br>
                                <label>a)Apele termale</label><br><br>
                                <label>b)Podurile</label><br><br>
                                <label>c)Terenurile agricole</label><br><br>
                                <label>d)Pe&#537;terile</label><br><br>
                                <input id="d" type="text"><br><br>
                            </div>

                            <div>
                                <label>De c&acirc;nd dateaz&#259; prima atestare documentar&#259; a Constan&#539;ei?</label><br><br>
                                <label>a)657 &icirc;.Hr</label><br><br>
                                <label>b)570 &icirc;.Hr</label><br><br>
                                <label>c)702 &icirc;.Hr</label><br><br>
                                <label>d)435 &icirc;.Hr</label><br><br>
                                <input id="e" type="text"><br><br>
                            </div>

                            <div>
                                <label>La ce temperaturi ajung apele geortermale din Cri&#537;ana?</label><br><br>
                                <label>a)Peste 35&deg; C</label><br><br>
                                <label>b)32&deg; C</label><br><br>
                                <label>c)30&deg; C</label><br><br>
                                <label>d)28&deg; C</label><br><br>
                                <input id="f" type="text"><br><br>
                            </div>

                            <div>
                                <label>&Icirc;n ce regiune se afl&#259; Cimitirul Vesel S&#259;p&acirc;n&#355;a?</label><br><br>
                                <label>a)Maramure&#351;</label><br><br>
                                <label>b)Oltenia</label><br><br>
                                <label>c)Muntenia</label><br><br>
                                <label>d)Moldova</label><br><br>
                                <input id="g" type="text"><br><br>
                            </div>

                            <div>
                                <label>Cate biserici din Maramure&#351; au fost incluse &icirc;n patrimoniul mondial UNESCO?</label><br><br>
                                <label>a)8</label><br><br>
                                <label>b)6</label><br><br>
                                <label>c)5</label><br><br>
                                <label>d)11</label><br><br>
                                <input id="h" type="text"><br><br>
                            </div>

                            <div>
                                <label>&Icirc;n ce regiune se afl&#259; B&#259;ile Herculane?</label><br><br>
                                <label>a)Banat</label><br><br>
                                <label>b)Transilvania</label><br><br>
                                <label>c)Dobrogea</label><br><br>
                                <label>d)Oltenia</label><br><br>
                                <input id="i" type="text"><br><br>
                            </div>

                            <div>
                                <label>Din ce an este consider ora&#537;ul Sibiu capital&#259; cultural&#259; European&#259;?</label><br><br>
                                <label>a)2007</label><br><br>
                                <label>b)2010</label><br><br>
                                <label>c)2015</label><br><br>
                                <label>d)2003</label><br><br>
                                <input id="j" type="text"><br><br>
                            </div>

                            <div>
                                <input type="button" value="Raspunsuri corecte" onclick="suma();" id="in" class="input1">
                            </div>
                
                            <div>
                                <p id="result" align="center" style="font-weight: bold;"></p>
                            </div>
                
                        </fieldset>
                    </form>
                </td>
            </tr>
        </table>
    </article>
          
       <script>
            function suma() {
                var x1 = document.getElementById('a').value;
                var x2 = document.getElementById('b').value;
                var x3 = document.getElementById('c').value;
                var x4 = document.getElementById('d').value;
                var x5 = document.getElementById('e').value;
                var x6 = document.getElementById('f').value;
                var x7 = document.getElementById('g').value;
                var x8 = document.getElementById('h').value;
                var x9 = document.getElementById('i').value;
                var x10 = document.getElementById('j').value;
                var s=0;

                if(x1=='a'){
                    s++;
                }
                if(x2=='a'){
                    s++;
                }
                if(x3=='a'){
                    s++;
                }
                if(x4=='a'){
                    s++;
                }
                if(x5=='a'){
                    s++;
                }
                if(x6=='a'){
                    s++;
                }
                if(x7=='a'){
                    s++;
                }
                if(x8=='a'){
                    s++;
                }
                if(x9=='a'){
                    s++;
                }
                if(x10=='a'){
                    s++;
                }

                document.getElementById('result').innerHTML = "Raspunsuri corecte : "+s;
                
            }
            
        </script>
    </body>
</html>