<!DOCTYPE html>
<html>
<head>
  <title>Procesador</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="./ProcesorMain.js"></script>
  <script src="./ProcesorMainaction.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body style=" margin-left: 33px; margin-right: 50px;">
 
<div class="row"> 
        <h1 align="center">Risk-V Processor Simulator</h1>
    <div  class="col-sm-3">
        <h5>Digíta el codigo o set de instrucciones que deseas ejecutar</h5>
        <textarea name="codearea" id="codearea" rows="10" cols="50" ></textarea><br/>
        <button name="btnLimpiar" id="btnLimpiar" type="button" class="btn btn-primary btn-lg">Limpiar</button>
        <button name="btnProcesar" id="btnProcesar" type="button" class="btn btn-success btn-lg">Ejecutar</button>
    </div>
    <div class="col-sm-6">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="-0.22592152655124664 0 1300.4517822265625 840" preserveAspectRatio="xMidYMid meet" style="    padding-left: 106px;"><defs id="svgEditorDefs"><polygon id="svgEditorShapeDefs" style="fill:#7cb8bf;stroke:black;vector-effect:non-scaling-stroke;stroke-width:1px;"/></defs><rect id="svgEditorBackground" x="0" y="0" width="1300" height="840" style="fill: none; stroke: none;"/><rect x="93.66225433350857" y="369.5599975585729" style="fill:#6d77ab;stroke:black;stroke-width:1px;" id="e3_rectangle" width="45.9455" height="127.851"/><rect x="174.5659790038696" y="358.57315063477597" style="fill:#7cb8bf;stroke:black;stroke-width:1px;" id="e4_rectangle" width="170.799" height="159.809"/><rect x="388.3114929199571" y="356.575531005858" style="fill:#7cb8bf;stroke:black;stroke-width:1px;" id="e1_rectangle" width="170.799" height="159.809"/><polyline style="stroke:black;fill:#8BC34A;stroke-width:1px;" id="e6_polyline" points="631.023 351.581 635.018 397.527 635.018 399.524 663.983 423.496 634.019 443.472 636.017 486.421 700.939 448.466 698.942 397.527 630.024 352.58"/><polyline style="stroke:black;fill:#8BC34A;stroke-width:1px;" id="e1_polyline" points="406.29 145.826 410.285 191.771 410.285 193.769 439.251 217.74 409.286 237.718 411.284 280.666 476.205 242.712 474.208 191.771 405.291 146.826"/><polyline style="stroke:black;fill:#8BC34A;stroke-width:1px;" id="e2_polyline" points="215.517 120.857 219.512 166.802 219.512 168.8 248.478 192.771 218.513 212.748 220.511 255.696 285.433 217.742 283.436 166.802 214.518 121.856"/><ellipse id="e7_ellipse" cx="599.0607910156627" cy="494.4113769531611" style="fill:#2196F3;stroke:black;stroke-width:1px;" rx="22.97265160530003" ry="45.945303210500015" transform="matrix(0.818182 0 0 1 106.923 6.99168)"/><ellipse id="e2_ellipse" cx="589.6724853516143" cy="272.6753845215178" style="fill:#2196F3;stroke:black;stroke-width:1px;" rx="22.97265160530003" ry="45.945303210500015" transform="matrix(0.833333 0 0 1 95.1824 0)"/><rect x="742.8890991211238" y="332.60409545903167" style="fill:#7cb8bf;stroke:black;stroke-width:1px;" id="e2_rectangle" width="170.8" height="213.751"/><ellipse id="e1_ellipse" cx="282.03860473629567" cy="87.89537048342375" style="fill:#2196F3;stroke:black;stroke-width:1px;" rx="22.97265160530003" ry="45.945303210500015" transform="matrix(0.833333 0 0 1 95.1824 0)"/><text style="fill:white;font-family:Arial;font-size:20px;" x="321.39117431640625" y="72.91319274902344" id="e8_texte">M</text><text style="fill:white;font-family:Arial;font-size:20px;" x="322.3899841308594" y="94.88701629638672" id="e2_texte">U</text><text style="fill:white;font-family:Arial;font-size:20px;" x="322.3899841308594" y="118.85845947265625" id="e1_texte">X</text><text style="fill:white;font-family:Arial;font-size:20px;" x="588.0732421875" y="488.4184265136719" id="e3_texte">M</text><text style="fill:white;font-family:Arial;font-size:20px;" x="578.0852661132812" y="257.6932373046875" id="e4_texte">M</text><text style="fill:white;font-family:Arial;font-size:20px;" x="590.0714111328125" y="509.3936462402344" id="e5_texte">U</text><text style="fill:white;font-family:Arial;font-size:20px;" x="579.0845947265625" y="280.6659240722656" id="e6_texte">U</text><text style="fill:white;font-family:Arial;font-size:20px;" x="579.0842895507812" y="303.6384582519531" id="e7_texte">X</text><text style="fill:white;font-family:Arial;font-size:20px;" x="591.070068359375" y="529.3693237304688" id="e9_texte">X</text><text style="fill:white;font-family:Arial;font-size:20px;" x="101.65232849121094" y="443.4719543457031" id="e10_texte">PC</text><text style="fill:white;font-family:Arial;font-size:20px;" x="262.4608459472656" y="422.4969482421875" id="e11_texte"><tspan x="260.64154052734375" style="text-anchor:middle;">INSTRUCTION </tspan><tspan x="259.64276123046875" dy="1.25em" style="text-anchor:middle;">MEMORY</tspan></text><text style="fill:white;font-family:Arial;font-size:20px;" x="415.2789611816406" y="442.47314453125" id="e12_texte">REGISTERS</text><text style="fill:white;font-family:Arial;font-size:20px;" x="756.8721313476562" y="445.4695739746094" id="e13_texte">DATA MEMORY</text><text style="fill:white;font-family:Arial;font-size:20px;" x="657.9893188476562" y="430.4874267578125" id="e14_texte" transform="matrix(0.655048 0 0 0.655048 237.108 145.553)">ALU</text><text style="fill:white;font-family:Arial;font-size:20px;" x="314.2259521484375" y="115.69513702392578" id="e15_texte" transform="matrix(0.655048 0 0 0.655048 237.108 145.553)">ADD</text><text style="fill:white;font-family:Arial;font-size:20px;" x="23.830333709716797" y="79.93955993652344" id="e16_texte" transform="matrix(0.655048 0 0 0.655048 237.108 145.553)">ADD</text><line id="e9_line" x1="138.60876689824707" y1="438.4779968261719" x2="175.56477580937988" y2="437.47918701171875" style="stroke:black;fill:none;stroke-width:1px;"/><line id="e10_line" x1="344.3638221581" y1="435.48156956" x2="387.3126925505" y2="435.48156956" style="stroke:black;fill:none;stroke-width:1px;"/><line id="e11_line" x1="559.1081741201" y1="379.548156956" x2="633.0201836325" y2="379.548156956" style="stroke:black;fill:none;stroke-width:1px;"/><line id="e12_line" x1="700.9393275089" y1="426.4922711058" x2="742.8893869619" y2="426.4922711058" style="stroke:black;fill:none;stroke-width:1px;"/><line id="e13_line" x1="614.0427757847" y1="478.4304399524" x2="635.018" y2="459.452" style="stroke:black;fill:none;stroke-width:1px;"/><line id="e14_line" x1="559.1081741201" y1="496.4090368609" x2="579.0843929072" y2="496.4090368609" style="stroke:black;fill:none;stroke-width:1px;"/><circle id="e15_circle" cx="518.1569824218609" cy="664.2092285156592" style="fill:#e89c2cd1;stroke:black;stroke-width:1px;" r="88.6244220432" transform="matrix(0.657042 0 0 0.657042 143.247 202.326)"/><text style="fill:white;font-family:Arial;font-size:20px;" x="436.25396728515625" y="643.2339477539062" id="e17_texte">CONTROL</text><polyline style="stroke:black;fill:none;stroke-width:1px;" id="e16_polyline" points="358.347 435.482 356.849 436.48 355.351 607.277 435.256 609.275"/><polyline style="stroke:black;fill:none;stroke-width:1px;" id="e17_polyline" points="492.1878356933594 578.3115234375"/><polyline style="stroke:black;fill:none;stroke-width:1px;" id="e20_polyline" points="541.13 631.249 599.061 629.251 597.063 546.35"/><polyline style="stroke:black;fill:none;stroke-width:1px;" id="e22_polyline" points="365.339 434.483 364.34 555.339 552.116 553.341 552.116 526.374 581.082 526.374"/><polyline style="stroke:black;fill:none;stroke-width:1px;" id="e24_polyline" points="719.917 425.493 717.919 304.637 600.059 302.64"/><polyline style="stroke:black;fill:none;stroke-width:1px;" id="e26_polyline" points="387.313 372.556 362.342 372.556 363.341 298.644 573.092 302.64"/><polyline style="stroke:black;fill:none;stroke-width:1px;" id="e28_polyline" points="912.687 432.485 949.643 433.484 946.647 262.687 605.053 260.69"/><polyline style="stroke:black;fill:none;stroke-width:1px;" id="e29_polyline" points="356.35 438.478 358.347 265.684 409.287 264.685"/><polyline style="stroke:black;fill:none;stroke-width:1px;" id="e30_polyline" points="154.59 437.479 156.587 244.709 219.512 244.709"/><polyline style="stroke:black;fill:none;stroke-width:1px;" id="e31_polyline" points="309.405 93.8882 77.6813 92.8894 73.6861 436.48 94.6611 436.48"/><polyline style="stroke:black;fill:none;stroke-width:1px;" id="e32_polyline" points="282.438 193.769 367.336 193.769 367.336 100.88 348.359 100.88"/><line id="e33_line" x1="366.337662824" y1="143.8287752675" x2="407.2889113377" y2="167.8002378121" style="stroke:black;fill:none;stroke-width:1px;"/><polyline style="stroke:black;fill:none;stroke-width:1px;" id="e34_polyline" points="473.21 213.746 518.157 213.746 517.158 65.9215 343.365 61.9263"/><polyline style="stroke:black;fill:none;stroke-width:1px;" id="e35_polyline" points="507.17 584.304 540.131 585.303 540.131 514.388"/><polyline style="stroke:black;fill:none;stroke-width:1px;" id="e36_polyline" points="540.131 651.225 896.706 652.224 894.709 544.352"/><text style="fill:white;font-family:Arial;font-size:20px;" x="814.8034057617188" y="538.359619140625" id="e37_texte">MemRead</text><text style="fill:white;font-family:Arial;font-size:20px;" x="817.7993774414062" y="357.5749206542969" id="e18_texte">MemWrite</text><polyline style="stroke:black;fill:none;stroke-width:1px;" id="e38_polyline" points="534.138 666.207 991.593 665.208 991.593 666.207 984.602 288.656 848.763 286.659 849.762 332.604"/><polyline style="stroke:black;fill:none;stroke-width:1px;" id="e39_polyline" points="527.146 678.193 1016.56 675.196 1010.57 239.715 599.061 237.717"/><polyline style="stroke:black;fill:none;stroke-width:1px;" id="e40_polyline" points="508.169 689.18 1036.54 685.184 1029.55 322.616 704.935 322.616 705.933 412.509 698.942 412.509"/><path d="M0,0h4a4,4,0,0,0,-4,-4v4v-4a4,4,0,0,0,-4,4h4h-4a4,4,0,0,0,4,4v-4v4a4,4,0,0,0,4,-4h-4Z" style="fill:#7cb8bf; stroke:black; vector-effect:non-scaling-stroke;stroke-width:1px;" id="e42_shape" transform="matrix(1.32583 0 0 1.32583 355.85 432.985)"/><path d="M-151.98164144533104,2.454632610375832h4a4,4,0,0,0,-4,-4v4v-4a4,4,0,0,0,-4,4h4h-4a4,4,0,0,0,4,4v-4v4a4,4,0,0,0,4,-4h-4Z" style="fill:#7cb8bf; stroke:black; vector-effect:non-scaling-stroke;stroke-width:1px;" id="e14_shape" transform="matrix(1.32583 0 0 1.32583 355.85 432.985)"/><path d="M160.09888695461206,47.09673520664235h4a4,4,0,0,0,-4,-4v4v-4a4,4,0,0,0,-4,4h4h-4a4,4,0,0,0,4,4v-4v4a4,4,0,0,0,4,-4h-4Z" style="fill:#7cb8bf; stroke:black; vector-effect:non-scaling-stroke;stroke-width:1px;" id="e1_shape" transform="matrix(1.32583 0 0 1.32583 355.85 432.985)"/><path d="M274.8023236347564,-5.44301270036167h4a4,4,0,0,0,-4,-4v4v-4a4,4,0,0,0,-4,4h4h-4a4,4,0,0,0,4,4.000000000000002v-4.000000000000002v4.000000000000002a4,4,0,0,0,4,-4.000000000000002h-4Z" style="fill:#7cb8bf; stroke:black; vector-effect:non-scaling-stroke;stroke-width:1px;" id="e2_shape" transform="matrix(1.32583 0 0 1.32583 355.85 432.985)"/><polyline style="stroke:black;fill:none;stroke-width:1px;" id="e44_polyline" points="568.097 498.407 569.096 570.321 714.923 571.32 713.924 530.369 740.892 529.37"/></svg>

    </div>
    <div class="col-sm-2">
        <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Variable</th>
                <th scope="col">Número</th>
                <th scope="col">Decimal</th>
                <th scope="col">Valor</th> 
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">$zero</th>
                <td>0</td>
                <td id="zero" class="valCalculate">0</td>
                <td>0x0000000000</td> 
            </tr>
            <tr>
                <th scope="row">$at</th>
                <td>1</td>
                <td id="at" class="valCalculate">0</td>
                <td id="hat">0x0000000000</td> 
            </tr>
            <tr>
                <th scope="row">$v0</th>
                <td>2</td>
                <td id="v0" class="valCalculate">0</td>
                <td id="hv0">0x0000000000</td> 
            </tr>
            <tr>
                <th scope="row">$v1</th>
                <td>3</td>
                <td id="v1" class="valCalculate">0</td>
                <td id="hv1">0x0000000000</td> 
            </tr>
            <tr>
                <th scope="row">$a0</th>
                <td>4</td>
                <td id="a0" class="valCalculate">0</td>
                <td id="ha0">0x0000000000</td> 
            </tr>
            <tr>
                <th scope="row">$a3</th>
                <td>5</td>
                <td id="a3" class="valCalculate">0</td>
                <td id="ha3">0x0000000000</td> 
            </tr>
            <tr>
                <th scope="row">$t0</th>
                <td>6</td>
                <td id="t0" class="valCalculate">0</td>
                <td id="ht0">0x0000000000</td> 
            </tr>
            <tr>
                <th scope="row">$t1</th>
                <td>7</td>
                <td id="t1" class="valCalculate">0</td>
                <td id="ht1">0x0000000000</td> 
            </tr>
            <tr>
                <th scope="row">$t2</th>
                <td>8</td>
                <td id="t2" class="valCalculate">0</td>
                <td id="ht2">0x0000000000</td> 
            </tr>
            <tr>
                <th scope="row">$t3</th>
                <td>9</td>
                <td id="t3" class="valCalculate">0</td>
                <td id="ht3">0x0000000000</td> 
            </tr>
            <tr>
                <th scope="row">$s0</th>
                <td>10</td>
                <td id="s0" class="valCalculate">0</td>
                <td id="hs0">0x0000000000</td> 
            </tr>
            <tr>
                <th scope="row">$s1</th>
                <td>11</td>
                <td id="s1" class="valCalculate">0</td>
                <td id="hs1">0x0000000000</td> 
            </tr>
            <tr>
                <th scope="row">$s2</th>
                <td>12</td>
                <td id="s2" class="valCalculate">0</td>
                <td id="hs2">0x0000000000</td> 
            </tr>
            <tr>
                <th scope="row">$s3</th>
                <td>13</td>
                <td id="s3" class="valCalculate">0</td>
                <td id="hs3">0x0000000000</td> 
            </tr>
            <tr>
                <th scope="row">$gp</th>
                <td>14</td>
                <td id="gp" class="valCalculate">0</td>
                <td id="hgp">0x0000000000</td> 
            </tr>
            <tr>
                <th scope="row">$sp</th>
                <td>15</td>
                <td id="sp" class="valCalculate">0</td>
                <td id="hsp">0x0000000000</td> 
            </tr>
            <tr>
                <th scope="row">$fp</th>
                <td>16</td>
                <td id="fp" class="valCalculate">0</td>
                <td id="hfp">0x0000000000</td> 
            </tr>
            <tr>
                <th scope="row">$ra</th>
                <td>17</td>
                <td id="ra" class="valCalculate">0</td>
                <td id="hra">0x0000000000</td> 
            </tr>
        </tbody>
        </table>
    </div>
</div>

<footer>
<p align="center">Integrantes</p><br/>
<p align="center">Karen Daniela Vargas Casas y Felipe Galindo Diaz</p><br/>
</footer>

</body>
</html>