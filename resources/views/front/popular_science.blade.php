@extends("layouts.hf")
@section("css")
<link rel="stylesheet" href="{{asset('css/popular_science.css')}}">
@endsection

@section("main")
<div class="fixed-button">
    <a href="/test"><img src="{{asset('pic/hide.png')}}" alt="">
        <p>浪浪學堂</p>
    </a>
</div>
<div class="container-fluid p-0">
    <div class="cover">
        <div class="row">
            <div class="col-sm-8" style="margin-top: 2%">
                <div class="row justify-content-end">
                    <div class="col-sm-2 col-md-auto ti"></div>
                    <div class="col-sm-1 col-md-auto"></div>
                </div>
            </div>

        </div>
        <h1 class="word">
            <div>認識浪浪</div>
        </h1>
    </div>
</div>

<div class="container">
    <div class="row container my-5">
        <div class="col-12 col-md-2">
            <div class="list-group mb-3" id="list-tab" role="tablist" style="border-style: none;">
                <span class="s-style">分類</span>
                <hr style="border-color: rgb(90, 90, 90)" />
                <a class="astyle list-group-item list-group-item-action active jumbotron bg-info active " id="list-home-list" data-bs-toggle="list" href="#list-home" role="tab" aria-controls="list-home">飼料</a>
                <a class="astyle list-group-item list-group-item-action jumbotron bg-info" id="list-profile-list" data-bs-toggle="list" href="#list-profile" role="tab" aria-controls="list-profile">領養</a>
                <a class="astyle list-group-item list-group-item-action jumbotron bg-info " id="list-settings-list" data-bs-toggle="list" href="#list-settings" role="tab" aria-controls="list-settings">其他</a>
            </div>
        </div>
        <div class="col-12 offset-md-1 col-md-9" >
            <div class="tab-content" id="nav-tabContent">
                <!--飼料-->
                <div class="tab-pane fade show active container" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
                    <div class="accordion" id="accordionExample">
                        <div class="acc-style mb-3">
                            <div class="accordion-item" id="acc-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button collapsed " id="acc-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="TRUE" aria-controls="collapseOne">
                                        Q1. 如何查看飼料是否新鮮及安全
                                    </button>
                                </h2>
                                <div id="collapseOne" class="collapse acc-ins " aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body ">
                                        第一先看製造日期，無庸置疑，製造日期越新鮮越好
                                        看看產品包裝上有什麼單位的認證，製造有無受到規範標準
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="acc-style mb-3">
                            <div class="accordion-item" id="acc-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" id="acc-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Q2. 如何挑選肉類飼料
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="collapse acc-ins" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        meat(肉)牛肉、羊肉、poultry(禽肉)雞肉、鴨肉為優先，其他像鮭魚也是不錯的選擇，挑選時要注意避開家中狗狗會過敏的食材喔。一周餵狗狗吃1~2次水煮羊肉，可增進腸胃功能，羊油則能讓狗的毛色更加光亮。
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="acc-style mb-3">
                            <div class="accordion-item" id="acc-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" id="acc-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Q3. 蛋白質的含量需攝取多少%
                                    </button>
                                </h2>
                                <div id="collapseThree" class="collapse acc-ins" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        狗狗乾糧的蛋白質含量應控制在26%～30%較優，過少容易造成營養不良，過多則會對狗狗造成生理負擔，甚至是過胖。
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="acc-style mb-3">
                            <div class="accordion-item" id="acc-item">
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed" id="acc-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        Q4. 為何要選擇有機微量礦物質
                                    </button>
                                </h2>
                                <div id="collapseFour" class="collapse acc-ins" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        比起無機微量礦物質來說，有機微量礦物質讓狗狗較好的吸收，同時也幾乎沒有毒性，能大大減少狗狗身體的負擔。
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="acc-style mb-3">
                            <div class="accordion-item" id="acc-item">
                                <h2 class="accordion-header" id="headingFive">
                                    <button class="accordion-button collapsed" id="acc-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                        Q5. 為何要選擇無添加人工香料及色素
                                    </button>
                                </h2>
                                <div id="collapseFive" class="collapse acc-ins" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        有些飼料會添加對狗狗來說不必要的人工香料以及色素，不過這些對狗狗來說不但是非必要的營養，長久吃下來還可能對身體產生不好的影響。
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="acc-style mb-3">
                            <div class="accordion-item" id="acc-item">
                                <h2 class="accordion-header" id="headingSix">
                                    <button class="accordion-button collapsed" id="acc-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                        Q6. 哪種飼料好消化且可維持腸道健康
                                    </button>
                                </h2>
                                <div id="collapseSix" class="collapse acc-ins" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        可以選擇有水溶性膳食纖維甜菜的乾糧，甜菜不但可以促進腸胃蠕動，幫助消化，還可以調整腸道功能，協助礦物質吸收，有助於狗狗獲得均衡的營養，但是狗狗若有拉肚子的情況就要多多注意囉！
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="acc-style mb-3">
                            <div class="accordion-item" id="acc-item">
                                <h2 class="accordion-header" id="headingSeven">
                                    <button class="accordion-button collapsed" id="acc-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                        Q7. 為何狗飼料需添加鋅、Omega
                                    </button>
                                </h2>
                                <div id="collapseSeven" class="collapse acc-ins" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        狗狗若缺乏鋅可能會有掉毛、皮膚發紅、發炎、潰瘍等情形，而且因為狗狗體內並沒有儲藏鋅的系統，因此鋅是每天要攝取的必需性微量金屬喔！
                                        omega一直是都用來降低皮膚過敏的好幫手，攝取時更可以注意omega6及omega3保持5:1的黃金比例，讓狗狗毛髮皮膚保持健康好光澤
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="acc-style mb-3">
                            <div class="accordion-item" id="acc-item">
                                <h2 class="accordion-header" id="headingEight">
                                    <button class="accordion-button collapsed" id="acc-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                        Q8. 如何保存乾糧
                                    </button>
                                </h2>
                                <div id="collapseEight" class="collapse acc-ins" aria-labelledby="headingEight" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        建議購買保存期限6個月以上的乾糧，以及挑選開封後有密封條的包裝可方便乾糧的保存，另外選購市面上的密封箱，將短時間內不會食用到乾糧存放其中，更可以幫助保持乾糧的新鮮度喔！一般中型狗一次買可以吃差不多一個月，3公斤上下的乾糧就可以囉。
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--領養-->
                <div class="tab-pane fade " id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
                    <div class="accordion" id="accordionExample1">
                        <div class="acc-style mb-3">
                            <div class="accordion-item" id="acc-item">
                                <h2 class="accordion-header" id="headingNine">
                                    <button class="accordion-button collapsed" id="acc-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="true" aria-controls="collapseNine">
                                        Q1. 領養事宜及條件
                                    </button>
                                </h2>
                                <div id="collapseNine" class="collapse acc-ins" aria-labelledby="headingNine" data-bs-parent="#accordionExample1">
                                    <div class="accordion-body">
                                        <ul>
                                            <li>
                                                必須是愛狗的、有耐心願意花時間瞭解並好好照顧狗狗的人。
                                            </li>
                                            <li>
                                                須年滿20歲（男役畢佳），未滿20歲認養者須家長陪同。
                                            </li>
                                            <li>
                                                具有經濟基礎，同時居住環境穩定。
                                            </li>
                                            <li>
                                                跟家人同住，需先取得全部家人的同意；租屋或與室友同住，需取得房東與室友的同意。
                                            </li>
                                            <li>
                                                須同意狗狗必須結紮，及定期實施預防注射。
                                            </li>
                                            <li>
                                                須同意簽訂認養切結書。
                                            </li>
                                            <li>
                                                須同意接受後續追蹤及家庭訪問探視。
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="acc-style mb-3">
                            <div class="accordion-item" id="acc-item">
                                <h2 class="accordion-header" id="headingTen">
                                    <button class="accordion-button collapsed" id="acc-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                        Q2. 第一次帶狗狗回家該做什麼
                                    </button>
                                </h2>
                                <div id="collapseTen" class="collapse acc-ins" aria-labelledby="headingTen" data-bs-parent="#accordionExample1">
                                    <div class="accordion-body">
                                        <ul>
                                            <li>
                                                準備必需品並布置好環境
                                            </li>
                                            <p class="indent">在帶狗狗回家前，記得先將飼料、毯子、睡覺的地方、尿片 (報紙)、玩具等先準備好並布置成舒適的環境。另外要記得把可能製造危險 (或是不想被弄壞) 的物品收好，例如清潔劑、藥品、電線或可能吞入的小東西。</p>
                                            <p class="indent">狗狗在來到陌生的環境時可能會表現的異常興奮或害怕，而出現暴衝或是躲藏的行為，因此一開始最好不要給狗狗太大的空間，而是先用小空間讓狗狗熟悉環境並建立安全感。因此比起讓他整屋子到處跑，小房間、圍欄或是籠子都是更好的選擇。 </p>
                                            <li>
                                                身體檢查及接種疫苗
                                            </li>
                                            <p class="indent">若狗狗還沒打過疫苗或做過檢查，建議認養回來的當天先帶去獸醫做基本的驗血檢查及體內外驅蟲。七到十四天觀察無恙後，再去一趟醫院打狗狗五合一的預防針。</p>
                                            <p class="indent">另外剛換環境會導致狗狗免疫力下降而容易感冒或拉肚子。因此在狗狗剛到的 10 天內，需要密切的注意狗狗的身體狀況，如果有頻繁的打噴涕、流眼淚流鼻水、不吃不喝、拉肚子軟便、嘔吐或精神不濟的狀況，都需要馬上與獸醫聯絡。</p>
                                            <li>
                                                讓狗狗自己適應環境
                                            </li>
                                            <p class="indent">帶狗狗回家之後，雖然你可能很想跟他們玩或拍一堆照片，考量到狗狗身體和心理的狀況還不穩定，建議不要做太多刺激性或激烈的動作。若是小狗的話，可能會有到處亂跑、大小便的情況。這個時候最好耐心的陪伴他們，慢慢的讓他們用自己的速度適應新環境。</p>
                                            
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--其他-->
                <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">
                    <div class="accordion" id="accordionExample3">
                        <div class="acc-style mb-3">
                            <div class="accordion-item" id="acc-item">
                                <h2 class="accordion-header" id="headingEleven">
                                    <button class="accordion-button collapsed" id="acc-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEleven" aria-expanded="true" aria-controls="collapseEleven">
                                        Q1. 觀察狗狗吃完後的反應
                                    </button>
                                </h2>
                                <div id="collapseEleven" class="collapse acc-ins" aria-labelledby="headingEleven" data-bs-parent="#accordionExample3">
                                    <div class="accordion-body">
                                        應觀察狗狗的體重、排便及皮膚狀況，若體重明顯變重或變輕，大便量忽然變多或變少，甚至皮毛暗沉，定期健康檢查時指數與以往不同有所改變等，都是需要注意的地方。而若排便順暢沒有拉肚子及便秘情形，皮膚及毛色也亮澤柔順，定期健康檢查時也都一切正常，則表示此款乾糧狗狗適應良好，恭喜您選到一款好的乾糧！
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="acc-style mb-3">
                            <div class="accordion-item" id="acc-item">
                                <h2 class="accordion-header" id="headingTwelve">
                                    <button class="accordion-button collapsed" id="acc-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve">
                                        Q2. 更換飼料的頻率
                                    </button>
                                </h2>
                                <div id="collapseTwelve" class="collapse acc-ins" aria-labelledby="headingTwelve" data-bs-parent="#accordionExample3">
                                    <div class="accordion-body">
                                        更換飼料時應循序漸進，慢慢替換，千萬不要猛然更換以免造成狗狗腸胃不適喔。狗狗飼料需要隨著年紀做更換，太長時間吃同一種飼料容易導致元素累積、屯堆擴大的偏差。在更換狗狗飼料的時候，可以混著之前的飼料慢慢更替，不要一次就把飼料換過來。更換狗狗飼料時要注意吃完的排泄狀況，判斷飼料適不適合狗狗。因此沒有適合每一隻狗狗的飼料，要花費時間找到適合你家毛寶貝的最佳飼料。 </div>
                                </div>
                            </div>
                        </div>
                        <div class="acc-style mb-3">
                            <div class="accordion-item" id="acc-item">
                                <h2 class="accordion-header" id="headingThirteen">
                                    <button class="accordion-button collapsed" id="acc-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThirteen" aria-expanded="false" aria-controls="collapseThirteen">
                                        Q3. 狗糧乾餵濕餵都可以
                                    </button>
                                </h2>
                                <div id="collapseThirteen" class="collapse acc-ins" aria-labelledby="headingThirteen" data-bs-parent="#accordionExample3">
                                    <div class="accordion-body">
                                        既可以吃乾糧、喝清水，也可以泡濕了再喂，讓寵物將糧食和水一併吃下。
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="acc-style mb-3">
                            <div class="accordion-item" id="acc-item">
                                <h2 class="accordion-header" id="headingFourteen">
                                    <button class="accordion-button collapsed" id="acc-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFourteen" aria-expanded="false" aria-controls="collapseFourteen">
                                        Q4. 狗糧的溫度要適中
                                    </button>
                                </h2>
                                <div id="collapseFourteen" class="collapse acc-ins" aria-labelledby="headingFourteen" data-bs-parent="#accordionExample3">
                                    <div class="accordion-body">
                                        溫度高了會造成寵物口腔燙傷，溫度過低會引起寵物胃腸方面的疾病，出現拉稀、腹瀉症狀。經長期觀察統計我們發現，狗糧的溫度高出體溫的1~2℃為最佳，控制在40℃左右
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="acc-style mb-3">
                            <div class="accordion-item" id="acc-item">
                                <h2 class="accordion-header" id="headingFifteen">
                                    <button class="accordion-button collapsed" id="acc-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFifteen" aria-expanded="false" aria-controls="collapseFifteen">
                                        Q5. 餵食狗糧要定時、定點、定量
                                    </button>
                                </h2>
                                <div id="collapseFifteen" class="collapse acc-ins" aria-labelledby="headingFifteen" data-bs-parent="#accordionExample3">
                                    <div class="accordion-body">
                                        狗是一種非常聰明的寵物，有著超凡的智商和記憶力。因此，長期堅持同一地點、同一時間餵食給她們狗糧，久而久之，寵物狗就形成了固定的生活習慣。正常而言，幼犬每日飼餵2~4次，成犬每日飼餵1~2次。
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>


@endsection