<?php
/*
Template Name: 各店舗ページテンプレート
*/
?>
<?php get_header(); ?>
			<div class="container">
			<?php custom_breadcrumb(); ?>
				<section id="tenpoHeader">
					<h2>ホームセンタームサシ仙台泉店</h2>
					<div class="tenpoHeader_nav">
						<nav>
							<ul>
								<li><a href="#">ホーム</a></li>
								<li><a href="#">NEWS</a></li>
								<li><a href="#">最新チラシ</a></li>
								<li><a href="#">採用情報</a></li>
								<li><a href="#">店舗情報</a></li>
								<li><a href="#">各種サービス</a></li>
							</ul>
						</nav>
					</div>
					<div class="keyvisual">
						<div><img src="../../images/shop_sendaiizumi_kay.jpg" alt="" /></div>
					</div>
					<!-- keyvisual -->
				</section>
				
				<section id="tenpoNews">
					<h3>News</h3>
					<div class="flex-col3">

<?php get_template_part( 'loop', 'main' ); ?>

					</div>

					<div class="next">
						<p>
							<a href="#"> &gt;&gt;News続きをもっと見る</a>
						</p>
					</div>

					<div class="bnr">
						<div class="bnr_box">
							<a href="#">
								<div class="bgRed">
									<img src="<?php echo get_template_directory_uri(); ?>/images/common/bnr_flyer.jpg" alt="" />
								</div>
								<h4 class="bnr_box_heading">FLYER</h4>
								<p class="bnr_box_text">最新チラシ</p>
							</a>
						</div>
						<div class="bnr_box">
							<a href="#">
								<div class="bgBlue">
									<img src="<?php echo get_template_directory_uri(); ?>/images/common/bnr_recruit.jpg" alt="" />
								</div>
								<h4 class="bnr_box_heading">RECRUIT</h4>
								<p class="bnr_box_text">採用情報</p>
							</a>
						</div>
					</div>
				</section>
				<!-- news -->
				<section id="tenpoInfo">
					<h3>店舗情報</h3>
					<div class="tenpoInfo_list">
						<dl>
							<dt>TEL</dt>
							<dd>022-771-1634</dd>
						</dl>
						<dl>
							<dt>住所</dt>
							<dd>〒981-3137　宮城県仙台市泉区大沢3-9-1</dd>
						</dl>
						<dl>
							<dt>営業時間</dt>
							<dd>9：30～20：00、資材館のみ早朝営業実施中<span class="br_sp">7：00～20：00（年末年始は除く）</span></dd>
						</dl>
						<dl>
							<dt>駐車場</dt>
							<dd>1000台</dd>
						</dl>
						<dl>
							<dt>アクセス</dt>
							<dd>東北自動車道　泉ICより車で5分、<span class="br_sp">地下鉄泉中央駅より車で15分</span></dd>
						</dl>
					</div>
					<div class="tenpoInfo_map">
						<iframe
							src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4424.736637334973!2d140.87627568919402!3d38.354506927809055!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5f89822a0be460db%3A0x787ba2d531909ef7!2z44Ob44O844Og44K744Oz44K_44O844Og44K144K3IOS7meWPsOazieW6lw!5e0!3m2!1sja!2sjp!4v1555980628811!5m2!1sja!2sjp"
							frameborder="0"
							style="border:0"
							allowfullscreen
						></iframe>
					</div>
				</section>
				<!-- info -->
				<section id="service">
					<h3>各種サービス</h3>
					<p>詳細は店舗までお問い合わせください。</p>
					<div class="flex">
						<div>
							<dl>
								<dt>加工・製作</dt>
								<dd>カーペットサイズ加工</dd>
								<dd>テーブルクロスサイズカット。幅詰め加工。（有料）</dd>
								<dd>カフェカーテンの端縫い加工（無料）</dd>
								<dd>カーテンレールカット（無料）</dd>
								<dd>ブラインド丈詰め加工（有料）</dd>
								<dd>塩ビパイプカット（有料）</dd>
								<dd>シャッター式風呂フタ変形加工（有料）</dd>
								<dd>ブルーシートオーダー（有料）</dd>
								<dd>防炎シート・写真印刷（有料）</dd>
								<dd>合鍵作成（有料） 住まいの鍵、車<br />（外国車・特殊乗用車など一部除きます）</dd>
							</dl>
							<dl>
								<dt>ガーデン・切花</dt>
								<dd>寄せ植え作成（有料）</dd>
								<dd>鉢花のラッピング（有料）</dd>
								<dd>花束作成（有料）</dd>
								<dd>お花の発送（有料）</dd>
							</dl>
							<dl>
								<dt>受付・その他サービス</dt>
								<dd>包装（有料）</dd>
							</dl>
							<dl>
								<dt>組立・取付</dt>
								<dd>エアコン・ガス器具取付工事（有料）</dd>
								<dd>アンテナ・インターホン・ドアホン・防犯カメラ・</dd>
								<dd>換気扇設置工事（有料）</dd>
								<dd>照明取付工事（有料）</dd>
								<dd>組立家具の組立（有料）</dd>
								<dd>温室の組立販売</dd>
								<dd>金庫配達（無料）設置（有料）</dd>
							</dl>
						</div>
						<div>
							<dl>
								<dt>名入れ加工（有料）</dt>
								<dd>封筒の名入れ</dd>
								<dd>クラフト角袋の印刷（10,000枚より）</dd>
								<dd>スリッパ名入れ（1足より）</dd>
								<dd>腕章の名入れ</dd>
								<dd>伴天の名入れ</dd>
								<dd>テント名入れ</dd>
								<dd>作業用ヘルメット名入れ</dd>
								<dd>ターポリンシート名入れ</dd>
								<dd>コンテナ名入れ</dd>
								<dd>クラフトテープ名入れ（1,500ケより）</dd>
								<dd>ダンボール箱名入れ</dd>
							</dl>
							<dl>
								<dt>ペット</dt>
								<dd>犬猫･小動物トリミング（有料・要予約）</dd>
								<dd>犬舎の組立て（無料）</dd>
							</dl>
							<dl>
								<dt>修理・部品交換・刃研ぎ</dt>
								<dt></dt>
								<dd>腕時計電池交換（有料・他店購入品も承ります。）</dd>
								<dd>※外国製・防水時計・デジタル式の電池交換は</dd>
								<dd>一部お預かりになります。</dd>
								<dd>腕時計修理（有料・他店購入品も承ります。）</dd>
								<dd>ワイパーブレード・ワイパーゴム交換（工賃無料）</dd>
								<dd>バッテリー交換</dd>
								<dd>（外国車・特殊乗用車など一部除きます）</dd>
								<dd>当店にてバッテリーお買い上げのお客様に</dd>
								<dd>無料にて交換致します。</dd>
								<dd>取り替えたバッテリーの処分も致します。</dd>
								<dd>（バッテリーチェックも無料）</dd>
								<dd>電動工具修理（有料・他店購入品も承ります。）</dd>
								<dd>機械修理・メンテナンス（有料・他店購入品も承ります。）</dd>
								<dd>刈り込み鋏・剪定鋏の刃研ぎ（有料・他店購入品も承ります。）</dd>
								<dd>家庭用包丁の刃研ぎサービス（有料・他店購入品も承ります。）</dd>
								<dd>自転車修理（有料・他店購入品も承ります。）</dd>
								<dd>自転車の廃車引取（自転車お買い上げ時・無料）</dd>
								<dd>自転車部品パーツ取付（無料）</dd>
								<dd>タイヤ取付け（有料）</dd>
								<dd>自転車タイヤ・チューブ交換（有料）</dd>
								<dd>網戸の張替え（有料）</dd>
							</dl>
						</div>
					</div>
				</section>
				<!-- service -->
				<section id="heisetu">
					<h3>併設店舗</h3>
					<div class="heisetu_list">
						<dl>
							<dt>【1F】</dt>
							<dd>食品館イトー</dd>
						</dl>
						<dl>
							<dt>【1F】</dt>
							<dd>アークドラッグ</dd>
						</dl>
						<dl>
							<dt>【1F】</dt>
							<dd>
								<ul>
									<li>アークスタイル</li>
									<li>リフォーム&エクステリア</li>
								</ul>
							</dd>
						</dl>
						<dl>
							<dt>【1F】</dt>
							<dd>スモリの家</dd>
						</dl>
						<dl>
							<dt>【1F】</dt>
							<dd>
								<ul>
									<li>七十七銀行</li>
									<li>ATM</li>
								</ul>
							</dd>
						</dl>
						<dl>
							<dt>【2F】</dt>
							<dd>
								<ul>
									<li>アークオアシス</li>
									<li>アート&クラフト</li>
								</ul>
							</dd>
						</dl>
						<dl>
							<dt>【2F】</dt>
							<dd>
								<ul>
									<li>チェントペルチェント</li>
									<li>カフェ</li>
								</ul>
							</dd>
						</dl>
						<dl>
							<dt>【2F】</dt>
							<dd>
								<ul>
									<li>ナフコ</li>
									<li>家具インテリア</li>
								</ul>
							</dd>
						</dl>
						<dl>
							<dt>【2F】</dt>
							<dd>
								<ul>
									<li>セリア</li>
									<li>100円ショップ</li>
								</ul>
							</dd>
						</dl>
					</div>
				</section>
				<!-- heisetu -->
			</div>
			<!-- container -->
	<?php wp_reset_postdata(); ?>
<?php get_footer(); ?>
