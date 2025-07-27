<!DOCTYPE html>
<html lang="ja">

<?php get_header(); ?>

<body id="js-drawer-body">
    <div class="l-inner">
        <header class="l-header">
            <nav class="p-pc-nav">
                <ul class="p-pc-nav__items u-hidden-sp">
                    <li class="p-pc-nav__item">OWNER’S PROFILE</li>
                    <li class="p-pc-nav__item">FEATURE</li>
                    <li class="p-pc-nav__item">MEMBER’S VOICE</li>
                </ul>
                <div class="p-pc-nav__logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/public/assets/img/logo.png" alt="">
                </div>
                <ul class="p-pc-nav__items u-hidden-sp">
                    <li class="p-pc-nav__item">PRICE</li>
                    <li class="p-pc-nav__item">Q&A</li>
                    <li class="p-pc-nav__item">ACCESS</li>
                </ul>
                <div class="p-pc-nav__button-wrap">
                    <button class="c-button">LINE予約</button>
                </div>
                <div class="p-sp-nav-wrap" id="js-drawer-icon">
                    <div class="p-sp-nav-wrap__item"></div>
                    <div class="p-sp-nav-wrap__item"></div>
                    <div class="p-sp-nav-wrap__item"></div>
                </div>
            </nav>
        </header>
        <div class="p-drawer-menu" id="js-drawer-content">
            <div class="p-drawer-menu__links">
                <a href="" class="p-drawer-menu__link">TOP</a>
                <a href="" class="p-drawer-menu__link">OWNER’S PROFILE</a>
                <a href="" class="p-drawer-menu__link">FEATURE</a>
                <a href="" class="p-drawer-menu__link">MEMBER’S VOICE</a>
                <a href="" class="p-drawer-menu__link">PRICE</a>
                <a href="" class="p-drawer-menu__link">Q&A</a>
                <a href="" class="p-drawer-menu__link">ACCESS</a>
            </div>
            <div class="p-profile__sns-wrap">
                <div class="p-profile__sns">
                    <img src="<?php echo get_template_directory_uri(); ?>/public/assets/img/you-tube-icon.png" alt="">
                </div>
                <div class="p-profile__sns">
                    <img src="<?php echo get_template_directory_uri(); ?>/public/assets/img/x-icon.png" alt="">
                </div>
                <div class="p-profile__sns inst">
                    <img src="<?php echo get_template_directory_uri(); ?>/public/assets/img/inst-icon.jpg" alt="">
                </div>
            </div>
        </div>
        <div class="p-fv">
            <h2 class="p-fv__title">
                <span class="p-fv__title-main">
                    <span class="u-bold-tile">週一</span>のトレーニングで<br />
                    <span class="u-bold-tile">人に見せたくなる<br class="u-hidden-pc" /><span class="u-text-adjust">カラダ</span>
                    </span> <span class="u-fz-md">をつくる。</span>
                </span>

                <span class="p-fv__title-sub">
                    一流俳優・<span class="u-text-adjust">モデル</span><span class="u-text-offset">を指導してきた</span> <br class="u-hidden-pc" />
                    本物のパーソナルトレーニング
                </span>
            </h2>
            <div class="p-fv__img">
                <img src="<?php echo get_template_directory_uri(); ?>/public/assets/img/fv-img.png" alt="">
            </div>
        </div>

        <sebtion class="p-review">
            <div class="c-sub-title">トレーニングを受けた会員様からこんな声が届いています。</div>
            <div class="p-review__wrap">
                <?php
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 3,
                    'orderby' => 'modified',
                    'order' => 'DESC'
                );
                $the_query = new WP_Query($args);
                ?>
                <?php if ($the_query->have_posts()): ?>
                    <?php while ($the_query->have_posts()): $the_query->the_post(); ?>
                        <div class="c-card">
                            <div class="c-card__text-wrap">
                                <h3 class="c-card__title"><?php the_title(); ?></h3>
                                <div class="c-card__description"><?php the_content(); ?></div>
                                <div class="c-card__user"><?php the_field('user') ?></div>
                            </div>
                            <div class="c-card__img">
                                <?php if (has_post_thumbnail()): ?>
                                    <?php the_post_thumbnail(); ?>
                                <?php else: ?>
                                    <img src="<?php get_template_directory_uri() ?>/public/assets/img/meritt-thomas-_8qzW8tQbNk-unsplash.png" alt="">
                                <?php endif ?>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>

            </div>
        </sebtion>

        <section class="p-profile">
            <h2 class="c-section-title">
                <div class="c-section-title__en">OWNER’S PROFILE</div>
                <div class="c-section-title__ja">代表プロフィール</div>
            </h2>

            <div class="p-profile__wrap">
                <div class="p-profile__img">
                    <img src="<?php echo get_template_directory_uri(); ?>/public/assets/img/profile-img.jpg" alt="">
                </div>
                <div class="p-profile__r-wrap">
                    <div class="p-profile__name-wrap">
                        <div class="p-profile__name">Kailani</div>
                        <div class="p-profile__sns-wrap">
                            <div class="p-profile__sns">
                                <img src="<?php echo get_template_directory_uri(); ?>/public/assets/img/you-tube-icon.png" alt="">
                            </div>
                            <div class="p-profile__sns">
                                <img src="<?php echo get_template_directory_uri(); ?>/public/assets/img/x-icon.png" alt="">
                            </div>
                            <div class="p-profile__sns inst">
                                <img src="<?php echo get_template_directory_uri(); ?>/public/assets/img/inst-icon.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="p-profile__text">
                        出産を機に激太りし、様々なダイエット法を試し、失敗を繰り返した過去を持つ。<br />
                        その後、筋トレや食事改善によってダイエットに成功。<br />自身の経験を活かし、現在はパーソナルトレーナーをしており、これまで1000人以上の肉体改造に成功。<br />
                        またYouTubeで1000万回再生された動画を持つ、筋トレインフルエンサーとしても活動している。<br />
                        YouTubeやInstagramではトレーニングやダイエットに良い食事法を発信している。</div>
                </div>
            </div>
            <div class="p-profile-massage">
                <div class="p-profile-massage__title">
                    Massage
                </div>
                <div class="p-profile-massage__text">
                    MELIA FITNESSではあなたに合った身体の動かし方や食生活の大切さをプロのトレーナーがマンツーマンでサポートいたします。<br />
                    継続することができて挫折しないボディメイク・ダイエットに自信があります。<br />
                    ぜひMELIA FITNESSで身体づくりの素晴らしさを体験してください。
                </div>
            </div>

        </section>
        <div class="p-worries">
            <img src="<?php echo get_template_directory_uri(); ?>/public/assets/img/worries-img.png" alt="">
        </div>
        <div class="p-worries__wrap">
            <h3 class="p-worries__title">こんなお悩みありませんか？</h3>
            <ul class="p-worries__text-lists">
                <li class="p-worries__text-list">トレーニングをしても本当に痩せられるか不安。</li>
                <li class="p-worries__text-list">トレーニングしたいけど時間がない。</li>
                <li class="p-worries__text-list">厳しい食事制限に耐えられるか分からない。</li>
                <li class="p-worries__text-list">一時的に痩せてもリバウンドしないか心配。</li>
                <li class="p-worries__text-list">ダイエットに失敗してきたので続けられるか不安。</li>
            </ul>
        </div>
        <div class="p-explain">
            <div class="c-sub-title">MELIA FITNESSは<br class="u-hidden-pc" />そんな悩みをお持ちの方にこそ<br class="u-hidden-pc" />ご利用していただきたい理由があります。</div>
        </div>

        <section class="p-future">
            <h2 class="c-section-title">
                <div class="c-section-title__en">FEATURE</div>
                <div class="c-section-title__ja">MELIA FITNESSが選ばれる5つの特徴</div>
            </h2>
            <div class="p-future__wrap">
                <?php
                $args = array(
                    'post_type' => 'feature',
                    'posts_per_page' => 6,
                    'orderby' => 'menu_order',
                    'order' => 'ASC'
                );
                $the_query = new WP_Query($args);
                ?>
                <?php if ($the_query->have_posts()): ?>
                    <?php while ($the_query->have_posts()): $the_query->the_post(); ?>
                        <div class="c-feature-card">
                            <div class="c-feature-card__img">
                                <?php if (has_post_thumbnail()): ?>
                                    <?php the_post_thumbnail(); ?>
                                <?php else: ?>
                                    <img src="<?php echo get_template_directory_uri() ?>/img/no-img.jpg" alt="">
                                <?php endif; ?>
                            </div>
                            <div class="c-feature-card__text-wrap">
                                <div class="c-feature-card__title">
                                    <?php if (get_field('main_title_line1') || get_field('main_title_line2')) : ?>
                                        <?php if (get_field('main_title_line1')) : ?>
                                            <?php the_field('main_title_line1'); ?><br>
                                        <?php endif; ?>

                                        <?php if (get_field('main_title_line2')) : ?>
                                            <?php the_field('main_title_line2'); ?>
                                        <?php endif; ?>
                                    <?php else : ?>
                                        <?php the_title(); ?>
                                    <?php endif; ?>
                                </div>
                                <div class="c-feature-card__text">
                                    <?php the_content(); ?>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>

                <?php wp_reset_postdata(); ?>

            </div>
            <div class="p-future__bottom">

            </div>
        </section>

        <section class="p-voice" style="background-image: url('<?php echo esc_url(get_field('voice_bg')); ?>');">
            <div class="p-voice__wrpper l-inner">
                <h2 class="c-section-title c-section-title--style-b">
                    <div class="c-section-title__en">MEMBER’S VOICE</div>
                    <div class="c-section-title__ja">会員様の声</div>
                </h2>
                <div class="p-voice__wrap">
                    <?php
                    $args = array(
                        'post_type' => 'voice',
                        'posts_per_page' => 6,
                        'orderby' => 'modified',
                        'order' => 'DESC'
                    );
                    $the_query = new WP_Query($args);
                    ?>
                    <?php if ($the_query->have_posts()): ?>
                        <?php while ($the_query->have_posts()): $the_query->the_post(); ?>
                            <div class="c-voice-card">
                                <div class="c-voice-card__img">
                                    <?php if (has_post_thumbnail()): ?>
                                        <?php the_post_thumbnail(); ?>
                                    <?php else: ?>
                                        <img src="<?php echo get_template_directory_uri() ?>/img/no-img.jpg" alt="">
                                    <?php endif; ?>
                                </div>
                                <div class="c-voice-card__text-wrap">
                                    <div class="c-voice-card__title"> <?php the_title(); ?></div>
                                    <div class="c-voice-card__user"><?php the_field('user') ?></div>
                                    <div class="c-voice-card__text"><?php the_content(); ?></div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>

                    <?php wp_reset_postdata(); ?>

                </div>
            </div>
        </section>

        <section class="p-price">
            <div class="p-price__wrap">
                <h2 class="c-section-title">
                    <div class="c-section-title__en">PRICE</div>
                    <div class="c-section-title__ja">ご利用料金</div>
                </h2>
                <div class="p-price__text-wrap">
                    <p class="p-price__prise">
                        <span>月額</span>
                        <span>¥</span>
                        <span>29<span class="comma">,</span>800</span>
                        <span>税込</span>
                    </p>
                    <p class="p-price__sub-title">週1で通うMELIA FITNESSの<br class="u-hidden-pc" />
                        パーソナルトレーニング</p>
                    <p class="p-price__text">トレーナーとマンツーマンで理想的なボディメイクを目指します。</p>
                    <p class="p-price__kailani">※Kailaniご指名の場合は月額￥39,800</p>
                </div>
            </div>
            <div class="c-campaign">
                <div class="c-campaign__wrapper l-inner">
                    <div class="c-campaign__wrap">
                        <h3 class="c-campaign__title">期間限定無料体験キャンペーン</h3>
                        <div class="c-campaign__people">先着10名様限定</div>
                        <div class="c-campaign__container">
                            <div class="c-campaign__time">体験コース<span>1回60分</span>
                            </div>
                            <div class="c-campaign__price-wrap">
                                <div class="c-campaign__original">
                                    <p class="c-campaign__price-label">
                                        通常価格
                                    </p>
                                    <p class="c-campaign__price-value">¥12,000</p>
                                </div>
                                <div class="c-campaign__discount">￥<span>0</span></div>
                            </div>
                            <div class="c-campaign__period__wrap">
                                <div class="c-campaign__period-title">キャンペーン期間</div>
                                <div class="c-campaign__period">12月1日（月）～12月30日（金）</div>
                            </div>
                            <div class="c-campaign__button-wrap">
                                <button class="c-button">2分で完了!LINEで予約する</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="p-flow">
            <h2 class="c-section-title--style-b">
                <div class="c-section-title__en">FLOW</div>
                <div class="c-section-title__ja">パーソナルトレーニングの流れ</div>
            </h2>
            <?php
            $args = array(
                'post_type' => 'flow',
                'posts_per_page' => -1,
                'orderby' => 'menu_order',
                'order' => 'ASC'
            );
            $the_query = new WP_Query($args);
            ?>
            <?php if ($the_query->have_posts()): ?>
                <?php while ($the_query->have_posts()): $the_query->the_post(); ?>
                    <div class="p-flow__wrap">
                        <div class="p-flow__item">
                            <div class="p-flow__img">
                                <?php if (has_post_thumbnail()): ?>
                                    <?php the_post_thumbnail(); ?>
                                <?php else: ?>
                                    <img src="<?php echo get_template_directory_uri() ?>/img/no-img.jpg" alt="">
                                <?php endif; ?>
                            </div>
                            <p class="p-flow__step">STEP<?php the_field('step') ?></p>
                            <h3 class="p-flow__title"><?php the_title(); ?></h3>
                            <p class="p-flow__text"><?php the_content(); ?></p>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>

            <?php wp_reset_postdata(); ?>

        </section>
        <section class="p-qa">
            <h2 class="c-section-title">
                <div class="c-section-title__en">Q&A</div>
                <div class="c-section-title__ja">よくあるご質問</div>
            </h2>
            <?php
            $args = array(
                'post_type' => 'qa',
                'posts_per_page' => 6,
                'orderby' => 'menu_order',
                'order' => 'DESC'
            );
            $the_query = new WP_Query($args);
            ?>
            <?php if ($the_query->have_posts()): ?>
                <?php while ($the_query->have_posts()): $the_query->the_post(); ?>

                    <div class="p-qa__wrapper">
                        <div class="p-qa__wrap">
                            <p class="p-qa__q"><span class="p-qa__label">Q</span><?php the_field('q') ?></p>
                            <p class="p-qa__a"><span
                                    class="p-qa__label">A</span><?php the_field('a') ?>
                            </p>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>

            <?php wp_reset_postdata(); ?>


            <div class="p-qa__img">

            </div>
        </section>

        <section class="p-access">
            <h2 class="c-section-title--style-b">
                <div class="c-section-title__en">ACCESS</div>
                <div class="c-section-title__ja">アクセス</div>
            </h2>
            <div class="p-access__wrap">
                <div class="p-access__detail">
                    <h3 class="p-access__detail-title">MELIA FITNESS</h3>
                    <p class="p-access__detail-sub-title">パーソナルトレーニングジム メリアフィットネス</p>
                    <div class="p-access__detail-text-wrap">
                        <p class="p-access__detail-text">〒170-6045<br />東京都豊島区東池袋3-1-1 サンシャイン60 45階</p>
                        <p class="p-access__detail-text">JR池袋駅より徒歩5分</p>
                        <p class="p-access__detail-text">TEL <span>00-0000-0000</span></p>
                        <p class="p-access__detail-text">営業時間<span>10：00～22：00</span></p>
                    </div>


                </div>
                <div class="p-access__map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3238.8704894785997!2d139.71557591061887!3d35.729403527213044!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188d6f393e6fa5%3A0x2d61fabefab2f99f!2z44K144Oz44K344Oj44Kk44OzNjDjg5Pjg6s!5e0!3m2!1sja!2sjp!4v1752662853442!5m2!1sja!2sjp"
                        width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </section>
        <div class="c-campaign">
            <div class="c-campaign__wrapper l-inner">
                <div class="c-campaign__wrap">
                    <h3 class="c-campaign__title">期間限定無料体験キャンペーン</h3>
                    <div class="c-campaign__people">先着10名様限定</div>
                    <div class="c-campaign__container">
                        <div class="c-campaign__time">体験コース<span>1回60分</span>
                        </div>
                        <div class="c-campaign__price-wrap">
                            <div class="c-campaign__original">
                                <p class="c-campaign__price-label">
                                    通常価格
                                </p>
                                <p class="c-campaign__price-value">¥12,000</p>
                            </div>
                            <div class="c-campaign__discount">￥<span>0</span></div>
                        </div>
                        <div class="c-campaign__period__wrap">
                            <div class="c-campaign__period-title">キャンペーン期間</div>
                            <div class="c-campaign__period">12月1日（月）～12月30日（金）</div>
                        </div>
                        <div class="c-campaign__button-wrap">
                            <button class="c-button">2分で完了!LINEで予約する</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php get_footer(); ?>
        <?php wp_footer(); ?>
</body>

</html>