
<html>
    <head>
        <title></title>
        <style type="text/css">
            <!--
            body {
                font-family: Arial;
                font-size: 17.6px
            }
            .pos {
                position: absolute;
                z-index: 0;
                left: 0px;
                top: 0px
            }
            -->


            page {
                background: white;
                display: block;
                margin: 0 auto;
                margin-bottom: 0.5cm;
                box-shadow: 0 0 0.5cm rgba(0,0,0,0.5);
            }
            page[size="A4"] {
                position: relative;
                width: 23cm;
                height: 29.7cm;
            }
            page[size="A4"][layout="portrait"] {
                width: 23cm;
                height: 29.7cm;
            }
            @media print {
                body, page {
                    margin: 0;
                    box-shadow: 0;
                }
            }

            p.round3 {
                border: 2px solid #031269;
                border-radius: 12px;
                padding: 39px 1072px 1px 1px;
            }
            label {
                font-size: 10.5px;
            }

            input {
                font-size: 10.5px;
            }

            select {
                font-size: 10.5px;
            }
            .buty {
                border: none;
                color: white;
                text-align: center;
                text-decoration: none;
                display: inline-block;
            }
        </style>
    </head>


    <body>
            <form action="process" method="post">
        <input type="submit" class="transparent_btn blue" value="Start from Beginning"/>
    </form>

    <page size="A4">

        <nobr><nowrap>

                <div class="pos" id="_219:25" style="top:25;left:219">
                    <span id="_29.6" style="font-weight:bold; font-family:Arial; font-size:29.6px; color:#000000">
                        Pragati Life Insurance Limited</span>
                </div>
                <div class="pos" id="_308:61" style="top:61;left:308">
                    <span id="_24.2" style="font-weight:bold; font-family:Arial; font-size:24.2px; color:#000000">
                        <U>U</U><U>n</U><U>d</U><U>e</U><U>r</U><U>w</U><U>r</U><U>i</U><U>t</U><U>i</U><U>n</U><U>g</U><U> </U><U>R</U><U>e</U><U>p</U><U>o</U><U>r</U>t</span>
                </div>
                <div class="pos" id="_56:111" style="top:111;left:56">
                    <span id="_12.1" style="font-weight:bold; font-family:Courier New; font-size:12.1px; color:#000000">
                        Project: IPL</span>
                </div>
                <div class="pos" id="_492:111" style="top:111;left:492">
                    <span id="_12.1" style="font-weight:bold; font-family:Courier New; font-size:12.1px; color:#000000">
                        Date: <?= date('d/m/Y', time()); ?></span>
                </div>






                <div style=" background-color: ">
                    <div class="pos" id="_68:146" style="top:146;left:68">
                        <span id="_16.1" style=" font-family:Arial; font-size:16.1px; color:#000000">
                            Proposal & Name: <span id="_13.4" style="font-weight:bold; font-family:Courier New; font-size:13.4px"> <?= $urm[0]->PROPNO; ?></span></span>
                    </div>
                    <div class="pos" id="_343:149" style="top:149;left:343">
                        <span id="_12.1" style="font-weight:bold; font-family:Courier New; font-size:12.1px; color:#000000">
                            <?= $urm[0]->NAME; ?></span>
                    </div>
                    <div class="pos" id="_88:168" style="top:168;left:88">
                        <span id="_12.1" style="font-weight:bold; font-family:Courier New; font-size:12.1px; color:#000000">
                            Proposal.Date: <span style="font-weight:normal"> <?= $urm[0]->PROPDAT; ?></span></span>
                    </div>
                    <div class="pos" id="_118:186" style="top:186;left:118">
                        <span id="_12.1" style="font-weight:bold; font-family:Courier New; font-size:12.1px; color:#000000">
                            Comm.Date: <span style="font-weight:normal"> <?= $urm[0]->DATCOM; ?></span></span>
                    </div>
                    <div class="pos" id="_90:205" style="top:205;left:90">
                        <span id="_12.1" style="font-weight:bold; font-family:Courier New; font-size:12.1px; color:#000000">
                            Date of Birth:<span style="font-weight:normal"> <?= $urm[0]->DOB; ?></span></span>
                    </div>
                    <div class="pos" id="_307:206" style="top:206;left:307">
                        <span id="_12.1" style="font-weight:bold; font-family:Courier New; font-size:12.1px; color:#000000">
                            Age: <span style="font-weight:normal"> <?= $urm[0]->AGE; ?></span></span>
                    </div>
                    <div class="pos" id="_413:206" style="top:206;left:413">
                        <span id="_12.1" style="font-weight:bold; font-family:Courier New; font-size:12.1px; color:#000000">
                            Sex: <span style="font-weight:normal"> <?= $urm[0]->SEX; ?></span></span>
                    </div>
                    <div class="pos" id="_133:224" style="top:224;left:133">
                        <span id="_12.1" style="font-weight:bold; font-family:Courier New; font-size:12.1px; color:#000000">
                            Address:<span style="font-weight:normal"> <?= $urm[0]->DATCOM; ?></span></span>
                    </div>
                    <div class="pos" id="_118:261" style="top:261;left:118">
                        <span id="_12.1" style="font-weight:bold; font-family:Courier New; font-size:12.1px; color:#000000">
                            Education: <span style="font-weight:normal"> <?= $urm[0]->EDCODE; ?></span></span>
                    </div>
                    <div class="pos" id="_111:280" style="top:280;left:111">
                        <span id="_12.1" style="font-weight:bold; font-family:Courier New; font-size:12.1px; color:#000000">
                            Occupation: <span style="font-weight:normal"> <?= $urm[0]->OCCUP; ?></span></span>
                    </div>
                    <div class="pos" id="_105:299" style="top:299;left:105">
                        <span id="_12.1" style="font-weight:bold; font-family:Courier New; font-size:12.1px; color:#000000">
                            Term & Plan: <span style="font-weight:normal"> <?= $urm[0]->TERM; ?></span></span>
                    </div>
                    <div class="pos" id="_256:299" style="top:299;left:256">
                        <span id="_12.1" style=" font-family:Courier New; font-size:12.1px; color:#000000">
                            <?= $urm[0]->PLAN; ?></span>
                    </div>
                    <div class="pos" id="_105:317" style="top:317;left:105">
                        <span id="_12.1" style="font-weight:bold; font-family:Courier New; font-size:12.1px; color:#000000">
                            Policy Type: <span style="font-weight:normal"> <?= $urm[0]->POLICY_TYPE; ?> </span></span>
                    </div>
                    <div class="pos" id="_118:336" style="top:336;left:118">
                        <span id="_12.1" style="font-weight:bold; font-family:Courier New; font-size:12.1px; color:#000000">
                            Residence: <span style="font-weight:normal"> <?= $urm[0]->UR; ?> </span></span>
                    </div>
                    <div class="pos" id="_431:337" style="top:337;left:431">
                        <span id="_12.1" style="font-weight:bold; font-family:Courier New; font-size:12.1px; color:#000000">
                            Husband/Father Name: <span style="font-weight:normal"> MR. ABUL HASEM</span></span>
                    </div>
                    <div class="pos" id="_126:355" style="top:355;left:126">
                        <span id="_12.1" style="font-weight:bold; font-family:Courier New; font-size:12.1px; color:#000000">
                            Pay Mode:<span style="font-weight:normal"> <?= $urm[0]->PAYMODE; ?> </span></span>
                    </div>
                    <div class="pos" id="_468:355" style="top:355;left:468">
                        <span id="_12.1" style="font-weight:bold; font-family:Courier New; font-size:12.1px; color:#000000">
                            Monthly Income: <span style="font-weight:normal"> 10000</span></span>
                    </div>
                    <div class="pos" id="_90:373" style="top:373;left:90">
                        <span id="_12.1" style="font-weight:bold; font-family:Courier New; font-size:12.1px; color:#000000">
                            Basic Premium: <span style="font-weight:normal"> <?= $urm[0]->LPREM; ?></span></span>
                    </div>
                    <div class="pos" id="_492:374" style="top:374;left:492">
                        <span id="_12.1" style="font-weight:bold; font-family:Courier New; font-size:12.1px; color:#000000">
                            Sum Assured: <span style="font-weight:normal"> <?= $urm[0]->SUMASS; ?> </span></span>
                    </div>
                    <div class="pos" id="_88:392" style="top:392;left:88">
                        <span id="_12.1" style="font-weight:bold; font-family:Courier New; font-size:12.1px; color:#000000">
                            Extra Premium: <span style="font-weight:normal"> 0</span></span>
                    </div>
                    <div class="pos" id="_492:392" style="top:392;left:492">
                        <span id="_12.1" style="font-weight:bold; font-family:Courier New; font-size:12.1px; color:#000000">
                            Sum At Risk: <span style="font-weight:normal"> <?= $urm[0]->SUMRISK; ?> </span></span>
                    </div>
                    <div class="pos" id="_82:411" style="top:411;left:82">
                        <span id="_12.1" style="font-weight:bold; font-family:Courier New; font-size:12.1px; color:#000000">
                            Suppl. Premium: <span style="font-weight:normal"> 0</span></span>
                    </div>
                    <div class="pos" id="_498:411" style="top:411;left:498">
                        <span id="_12.1" style="font-weight:bold; font-family:Courier New; font-size:12.1px; color:#000000">
                            Total Risk: <span style="font-weight:normal"> <?= $urm[0]->SUMRISK; ?></span></span>
                    </div>
                    <div class="pos" id="_88:430" style="top:430;left:88">
                        <span id="_12.1" style="font-weight:bold; font-family:Courier New; font-size:12.1px; color:#000000">
                            Total Premium:<span style="font-weight:normal"> <?= $urm[0]->LPREM; ?></span></span>
                    </div>
                    <div class="pos" id="_506:431" style="top:431;left:506">
                        <span id="_12.1" style="font-weight:bold; font-family:Courier New; font-size:12.1px; color:#000000">
                            Age Prove: <span style="font-weight:normal"> <?= $urm[0]->APC; ?></span></span>
                    </div>
                    <div class="pos" id="_133:448" style="top:448;left:133">
                        <span id="_12.1" style="font-weight:bold; font-family:Courier New; font-size:12.1px; color:#000000">
                            FA Code:<span style="font-weight:normal"> N03004592</span></span>
                    </div>
                    <div class="pos" id="_476:449" style="top:449;left:476">
                        <span id="_12.1" style="font-weight:bold; font-family:Courier New; font-size:12.1px; color:#000000">
                            Proposal Type: <span style="font-weight:normal"> NON-MEDICAL</span></span>
                    </div>
                </div>

                <div class="pos" id="_68:487" style="top:487;left:68">
                    <span id="_15.4" style="font-weight:bold; font-family:Arial; font-size:15.4px; color:#000000">
                        <U>C</U><U>h</U><U>i</U><U>l</U><U>d</U><U>/</U><U>S</U><U>e</U><U>c</U><U>o</U><U>n</U><U>d</U><U> </U><U>L</U><U>i</U><U>f</U>e:</span>
                </div>
                <div class="pos" id="_68:509" style="top:509;left:68">
                    <span id="_12.2" style="font-weight:bold; font-family:Courier New; font-size:12.2px; color:#000000">
                        Name:</span>
                </div>
                <div class="pos" id="_363:509" style="top:509;left:363">
                    <span id="_12.2" style="font-weight:bold; font-family:Courier New; font-size:12.2px; color:#000000">
                        DOB:</span>
                </div>
                <div class="pos" id="_495:509" style="top:509;left:495">
                    <span id="_12.2" style="font-weight:bold; font-family:Courier New; font-size:12.2px; color:#000000">
                        Age:</span>
                </div>
                <div class="pos" id="_561:509" style="top:509;left:561">
                    <span id="_12.2" style="font-weight:bold; font-family:Courier New; font-size:12.2px; color:#000000">
                        Y</span>
                </div>
                <div class="pos" id="_618:509" style="top:509;left:618">
                    <span id="_12.2" style="font-weight:bold; font-family:Courier New; font-size:12.2px; color:#000000">
                        M</span>
                </div>
                <div class="pos" id="_651:509" style="top:509;left:651">
                    <span id="_12.2" style="font-weight:bold; font-family:Courier New; font-size:12.2px; color:#000000">
                        Sex:</span>
                </div>
                <div class="pos" id="_68:549" style="top:549;left:68">
                    <span id="_15.5" style="font-weight:bold; font-family:Arial; font-size:15.5px; color:#000000">
                        <U>P</U><U>r</U><U>e</U><U>v</U><U>i</U><U>o</U><U>u</U><U>s</U><U> </U><U>P</U><U>o</U><U>l</U><U>i</U><U>c</U><U>y</U><U> </U><U>I</U><U>n</U><U>f</U><U>o</U><U>r</U><U>m</U><U>a</U><U>t</U><U>i</U><U>o</U><U>n</U>:</span>
                </div>
                <div class="pos" id="_68:571" style="top:571;left:68">
                    <span id="_11.6" style="font-weight:bold; font-family:Courier New; font-size:11.6px; color:#000000">
                        Policy1 : </span>
                </div>
                <div class="pos" id="_332:571" style="top:571;left:332">
                    <span id="_12.2" style="font-weight:bold; font-family:Courier New; font-size:12.2px; color:#000000">
                        SA/SAR 1:</span>
                </div>
                <div class="pos" id="_602:565" style="top:565;left:602">
                    <span id="_12.2" style="font-weight:bold; font-family:Courier New; font-size:12.2px; color:#000000">
                        Status1:</span>
                </div>
                <div class="pos" id="_68:590" style="top:590;left:68">
                    <span id="_12.2" style="font-weight:bold; font-family:Courier New; font-size:12.2px; color:#000000">
                        Policy2 :</span>
                </div>
                <div class="pos" id="_332:591" style="top:591;left:332">
                    <span id="_12.2" style="font-weight:bold; font-family:Courier New; font-size:12.2px; color:#000000">
                        SA/SAR 2:</span>
                </div>
                <div class="pos" id="_602:584" style="top:584;left:602">
                    <span id="_12.2" style="font-weight:bold; font-family:Courier New; font-size:12.2px; color:#000000">
                        Status2: </span>
                </div>
                <div class="pos" id="_68:609" style="top:609;left:68">
                    <span id="_12.2" style="font-weight:bold; font-family:Courier New; font-size:12.2px; color:#000000">
                        Policy3 :</span>
                </div>
                <div class="pos" id="_332:609" style="top:609;left:332">
                    <span id="_12.2" style="font-weight:bold; font-family:Courier New; font-size:12.2px; color:#000000">
                        SA/SAR 3:</span>
                </div>
                <div class="pos" id="_602:603" style="top:603;left:602">
                    <span id="_12.2" style="font-weight:bold; font-family:Courier New; font-size:12.2px; color:#000000">
                        Status3:</span>
                </div>
                <div class="pos" id="_68:649" style="top:649;left:68">
                    <span id="_16.3" style="font-weight:bold; font-family:Arial; font-size:16.3px; color:#000000">
                        <U>U</U><U>n</U><U>d</U><U>e</U><U>r</U><U>w</U><U>r</U><U>i</U><U>t</U><U>i</U><U>n</U><U>g</U><U> </U><U>V</U><U>a</U><U>l</U><U>i</U><U>d</U><U>a</U><U>t</U><U>i</U><U>o</U><U>n</U>:</span>
                </div>
                <div class="pos" id="_137:672" style="top:672;left:137">
                    <span id="_13.0" style="font-weight:bold; font-family:Arial; font-size:13.0px; color:#000000">
                        Signature: <span id="_11.7" style=" font-family:Courier New; font-size:11.7px; color:#ff00ff"> APPROVED </span></span>
                </div>
                <div class="pos" id="_378:672" style="top:672;left:378">
                    <span id="_13.0" style="font-weight:bold; font-family:Arial; font-size:13.0px; color:#000000">
                        Under Age:<span id="_11.7" style=" font-family:Courier New; font-size:11.7px; color:#ff00ff"> APPROVED </span></span>
                </div>
                <div class="pos" id="_617:672" style="top:672;left:617">
                    <span id="_13.0" style="font-weight:bold; font-family:Arial; font-size:13.0px; color:#000000">
                        Term:  <span id="_11.7" style=" font-family:Courier New; font-size:11.7px; color:#ff00ff"> APPROVED</span></span>
                </div>
                <div class="pos" id="_138:690" style="top:690;left:138">
                    <span id="_13.0" style="font-weight:bold; font-family:Arial; font-size:13.0px; color:#000000">
                        Proposal: <span id="_11.7" style=" font-family:Courier New; font-size:11.7px; color:#ff00ff"> APPROVED </span></span>
                </div>
                <div class="pos" id="_414:691" style="top:691;left:414">
                    <span id="_13.0" style="font-weight:bold; font-family:Arial; font-size:13.0px; color:#000000">
                        Risk: <span id="_11.7" style=" font-family:Courier New; font-size:11.7px; color:#ff00ff"> APPROVED</span></span>
                </div>
                <div class="pos" id="_589:690" style="top:690;left:589">
                    <span id="_13.0" style="font-weight:bold; font-family:Arial; font-size:13.0px; color:#000000">
                        Residence: <span id="_11.7" style=" font-family:Courier New; font-size:11.7px; color:#ff00ff"> APPROVED</span></span>
                </div>
                <div class="pos" id="_138:709" style="top:709;left:138">
                    <span id="_13.0" style="font-weight:bold; font-family:Arial; font-size:13.0px; color:#000000">
                        Gender: <span id="_11.7" style=" font-family:Courier New; font-size:11.7px; color:#ff00ff"> APPROVED </span></span>
                </div>
                <div class="pos" id="_393:712" style="top:712;left:393">
                    <span id="_13.0" style="font-weight:bold; font-family:Arial; font-size:13.0px; color:#000000">
                        Medical: <span id="_11.7" style=" font-family:Courier New; font-size:11.7px; color:#ff00ff"> APPROVED</span></span>
                </div>
                <div class="pos" id="_625:708" style="top:708;left:625">
                    <span id="_13.0" style="font-weight:bold; font-family:Arial; font-size:13.0px; color:#000000">
                        Age:  <span id="_11.7" style=" font-family:Courier New; font-size:11.7px; color:#ff00ff"> APPROVED</span></span>
                </div>
                <div class="pos" id="_138:727" style="top:727;left:138">
                    <span id="_13.0" style="font-weight:bold; font-family:Arial; font-size:13.0px; color:#000000">
                        Risk Info: <span id="_11.7" style=" font-family:Courier New; font-size:11.7px; color:#ff00ff"> APPROVED</span></span>
                </div>
                <div class="pos" id="_373:727" style="top:727;left:373">
                    <span id="_13.0" style="font-weight:bold; font-family:Arial; font-size:13.0px; color:#000000">
                        Occupation: <span id="_11.7" style=" font-family:Courier New; font-size:11.7px; color:#ff00ff"> APPROVED</span></span>
                </div>
                <div class="pos" id="_68:773" style="top:773;left:68">
                    <span id="_14.3" style="font-weight:bold; font-family:Arial; font-size:14.3px; color:#000000">
                        Underwriting Decision:<span id="_18.2" style=" font-family:Courier New; font-size:18.2px; color:#003fbe"> PROPOSAL AUTOMATIC ACCEPTED ON <?= date('d/m/Y', time()); ?></span></span>
                </div>
                <div class="pos" id="_68:818" style="top:818;left:68">
                    <span id="_16.3" style="font-weight:bold; font-family:Arial; font-size:16.3px; color:#000000">
                        <U>R</U><U>e</U><U>m</U><U>a</U><U>r</U><U>k</U>s:</span>
                </div>
                <div class="pos" id="_57:959" style="top:959;left:57">
                    <span id="_10.3" style="font-weight:bold; font-family:Arial; font-size:10.3px; color:#0000ff">
                        Underwrite by:</span>
                </div>
                <div class="pos" id="_149:959" style="top:959;left:149">
                    <span id="_10.3" style="font-weight:bold; font-family:Arial; font-size:10.3px; color:#ff0000">
                        GOURI RANI SUTRADHAR (000586) on 14-DEC-21, COMILLA SERVICE CENTER (0204) -TAKAFUL-EKHLAS</span>
                </div>
            </nowrap></nobr>
    </page>
</body>
</html>
<?php
    array_push($_SESSION['urm'],$urm[0]->PROPNO);
?>