<?php

/**
 * Created by David Gibbs, Snaptech, for Curious Learning 10/14/2015
 */

$testJson = <<<EOT
{"1430974800":726,"1428642000":332,"1437368400":717,"1443762000":944,"1438405200":623,"1444194000":504,"1429333200":508,"1436677200":703,"1422680400":882,"1424926800":802,"1423458000":768,"1436936400":560,"1440306000":835,"1429074000":679,"1449291600":911,"1440478800":40,"1442206800":983,"1433134800":830,"1424062800":712,"1432443600":24,"1423371600":82,"1431752400":767,"1427864400":406,"1441515600":400,"1438318800":177,"1431234000":319,"1437627600":657,"1444712400":89,"1424667600":340,"1424149200":76,"1428555600":859,"1435899600":488,"1428901200":51,"1425358800":932,"1435986000":271,"1437714000":850,"1423630800":202,"1430802000":273,"1423976400":445,"1445749200":279,"1428296400":373,"1448946000":467,"1438059600":788,"1432702800":348,"1421730000":263,"1428814800":335,"1430456400":578,"1449637200":726,"1437022800":371,"1444366800":720,"1451019600":815,"1425445200":861,"1429851600":734,"1448082000":245,"1450760400":161,"1425099600":666,"1429592400":800,"1433739600":184,"1438923600":415,"1422939600":116,"1420174800":969,"1422162000":605,"1435640400":954,"1446094800":838,"1447218000":305,"1449118800":698,"1430715600":897,"1435294800":747,"1442034000":320,"1449378000":875,"1437109200":696,"1442984400":547,"1446440400":18,"1429938000":34,"1440824400":934,"1420520400":835,"1425186000":524,"1448341200":765,"1438146000":103,"1435381200":59,"1449896400":976,"1443070800":68,"1451106000":577,"1447736400":301,"1438664400":823,"1424408400":887,"1426914000":648,"1444453200":5,"1420261200":31,"1450242000":338,"1431493200":545,"1433221200":314,"1440565200":918,"1421902800":506,"1444971600":636,"1426568400":405,"1432962000":466,"1426654800":362,"1439442000":384,"1440997200":707,"1442725200":559,"1426050000":989,"1441688400":585,"1425963600":858,"1425877200":311,"1430110800":302,"1443416400":817,"1448254800":205,"1443243600":825,"1434258000":19,"1443157200":54,"1439787600":840,"1438491600":779,"1421643600":307,"1428037200":886,"1433480400":983,"1427346000":727,"1435035600":278,"1438750800":670,"1420866000":939,"1442466000":487,"1425272400":24,"1427000400":698,"1430629200":920,"1434517200":898,"1424754000":786,"1432789200":291,"1421384400":361,"1423112400":203,"1435208400":565,"1431147600":858,"1420693200":684,"1424581200":459,"1429419600":661,"1422421200":172,"1450414800":438,"1434862800":600,"1447045200":240,"1447131600":123,"1436331600":308,"1440651600":890,"1451451600":324,"1435813200":12,"1446008400":414,"1446613200":448,"1446958800":921,"1435554000":46,"1444539600":757,"1422766800":179,"1424840400":895,"1433566800":558,"1451192400":377,"1429246800":755,"1420088400":559,"1440392400":491,"1442120400":22,"1420952400":29,"1450933200":37,"1431666000":805,"1448427600":334,"1431406800":729,"1446699600":183,"1436072400":310,"1450069200":833,"1439701200":911,"1424235600":367,"1423717200":845,"1426395600":831,"1421989200":208,"1428123600":28,"1437973200":773,"1447650000":717,"1421470800":285,"1427605200":584,"1431925200":881,"1448168400":752,"1449550800":476,"1445662800":802,"1420347600":337,"1429765200":601,"1441774800":686,"1450328400":632,"1432184400":682,"1447909200":855,"1441602000":492,"1430024400":846,"1443502800":867,"1432616400":208,"1440133200":437,"1430370000":639,"1436763600":49,"1422853200":547,"1430888400":805,"1423285200":428,"1446526800":159,"1425013200":519,"1433307600":671,"1437454800":780,"1444798800":94,"1433048400":358,"1422594000":438,"1424322000":870,"1429678800":907,"1437800400":947,"1445835600":24,"1428382800":856,"1427691600":81,"1444280400":683,"1429506000":454,"1420606800":752,"1431320400":687,"1423803600":705,"1431838800":67,"1449464400":543,"1445576400":339,"1437541200":766,"1445058000":819,"1449982800":479,"1449810000":562,"1432098000":194,"1438232400":127,"1447304400":422,"1448773200":472,"1446267600":183,"1436850000":273,"1437195600":145,"1429160400":620,"1431061200":854,"1444885200":827,"1432270800":88,"1441342800":318,"1450674000":929,"1445230800":645,"1428728400":473,"1439528400":442,"1451365200":445,"1445922000":234,"1436245200":625,"1443848400":180,"1437282000":762,"1427173200":215,"1446354000":597,"1447995600":819,"1449723600":414,"1439010000":492,"1441083600":763,"1440910800":885,"1434603600":327,"1421125200":635,"1428469200":410,"1425531600":498,"1440046800":828,"1432875600":866,"1426309200":133,"1439269200":976,"1450155600":18,"1427950800":986,"1427432400":388,"1423198800":63,"1441947600":866,"1428987600":161,"1426827600":368,"1432357200":161,"1441429200":985,"1436158800":152,"1436504400":264,"1443589200":51,"1421298000":263,"1423026000":803,"1423544400":484,"1434776400":800,"1445317200":924,"1421038800":956,"1441170000":533,"1442811600":14,"1447563600":814,"1447477200":916,"1434085200":323,"1421816400":665,"1449205200":233,"1420779600":528,"1448600400":74,"1422507600":884,"1446786000":641,"1435726800":506,"1427086800":573,"1450501200":170,"1422248400":737,"1422334800":446,"1433998800":317,"1433394000":384,"1435122000":528,"1446872400":57,"1451278800":280,"1442552400":123,"1450587600":363,"1434171600":460,"1446181200":887,"1438578000":645,"1448859600":503,"1439182800":651,"1421557200":488,"1451538000":537,"1433826000":278,"1442293200":366,"1442379600":617,"1444021200":382,"1423890000":126,"1444107600":718,"1434344400":160,"1433653200":880,"1447822800":709,"1422075600":109,"1443934800":5,"1445490000":129,"1425790800":949,"1443330000":461,"1447390800":872,"1426482000":368,"1428210000":586,"1426136400":9,"1439960400":706,"1430542800":288,"1424494800":783,"1426222800":440,"1439874000":341,"1440219600":598,"1448686800":419,"1437886800":806,"1439614800":634,"1425704400":745,"1436418000":345,"1443675600":803,"1430283600":267,"1432011600":2,"1439355600":525,"1440738000":715,"1425618000":878,"1430197200":382,"1445403600":1000,"1421211600":779,"1441861200":85,"1427518800":993,"1433912400":512,"1420434000":376,"1427778000":267,"1442638800":756,"1434949200":772,"1445144400":378,"1439096400":557,"1449032400":368,"1426741200":605,"1435467600":971,"1442898000":67,"1444626000":730,"1434690000":413,"1431579600":76,"1448514000":28,"1427259600":233,"1450846800":731,"1438837200":532,"1441256400":825,"1434430800":762,"1432530000":620,"1436590800":305}
EOT;

$arrayFromJson = json_decode($testJson);

//Modify json array to use values created at runtime
$modifiedArrayFromJson = array();

foreach($arrayFromJson as $key => $value)
    $modifiedArrayFromJson[$key] = rand(0, 5000);

header('Content-Type: application/json');
echo json_encode($modifiedArrayFromJson);