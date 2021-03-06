<?php
/***** [ContactoUbicacionSocialMedia elementos="telefono,whatsapp,correo,skype-chat,skype-call,fb-messenger,instagram,facebook,twitter,youtube,vimeo,pinterest,vine,linkedin,google-plus,direccion" id="" share_whatsapp=--get_theme_mod( 'share_whatsapp' )--|"true" share_email]=--get_theme_mod( 'share_email' )--|"true" ******/


function simpleTheme_shortcode_contacto_ubicacion_socialmedia( $atts, $content ) {
	$atts = shortcode_atts( array(
		"elementos" => "telefono,whatsapp,correo,skype-chat,skype-call,fb-messenger,instagram,facebook,twitter,youtube,vimeo,pinterest,vine,linkedin,google-plus,direccion",
		"id" => '',
		"share_whatsapp" => get_theme_mod( 'share_whatsapp' ),
		"share_email" => get_theme_mod( 'share_email' )
	), $atts );
	$sm_tipo_desplegado = get_theme_mod( 'sm_tipo_desplegado' );
	$sm_instagram = get_theme_mod( 'sm_instagram', '' );
	$sm_facebook = get_theme_mod( 'sm_facebook', '' );
	$sm_twitter = get_theme_mod( 'sm_twitter', '' );
	$sm_twitter = get_theme_mod( 'sm_twitter', '' );
	$sm_youtube = get_theme_mod( 'sm_youtube', '' );
	$sm_vimeo = get_theme_mod( 'sm_vimeo', '' );
	$sm_pinterest = get_theme_mod( 'sm_pinterest', '' );
	$sm_vine = get_theme_mod( 'sm_vine', '' );
	$sm_linkedin = get_theme_mod( 'sm_linkedin', '' );
	$sm_googleplus = get_theme_mod( 'sm_googleplus', '' );
	$sm_email = get_theme_mod( 'sm_email', '' );
	$sm_telefono = get_theme_mod( 'sm_telefono', '' );
	$sm_whatsapp = get_theme_mod( 'sm_whatsapp', '' );
	$sm_skype_chat = get_theme_mod( 'sm_skype_chat', '' );
	$sm_skype_videollamada = get_theme_mod( 'sm_skype_videollamada', '' );
	$sm_messenger = get_theme_mod( 'sm_messenger', '' );
	$sm_direccion = get_theme_mod( 'sm_direccion', '' );

	$share_whatsapp = ( "true" === $atts[ "share_whatsapp" ] || true === $atts[ "share_whatsapp" ] );
	$share_email = ( "true" === $atts[ "share_email" ] || true === $atts[ "share_email" ] );

	ob_start();
	?>
	<nav <?php echo ( "" != $atts[ "id"] ? 'id="' . $atts[ "id"] . '"' : '' ); ?> class="social-navbar">
		<ul>
			<?php
			foreach( explode( ',' , $atts[ 'elementos' ] ) as $elemento ) {
				$elemento = strtolower( trim( $elemento ) );
				switch ($elemento) {
					case 'correo':
						?>
						<?php if( '' != $sm_email ): ?>
							<li><!-- EMail -->
								<a href="mailto:<?php echo $sm_email; ?>" target="_blank">
									<i class="fas fa-envelope fa-2x"></i>
									<?php if( "all" == $sm_tipo_desplegado ) :?>
										<span class="field">Correo</span>
									<?php endif; ?>
									<?php if( "all" == $sm_tipo_desplegado || "data" == $sm_tipo_desplegado ) :?>
										<span class="data"><?php echo $sm_email; ?></span>
									<?php endif; ?>
								</a>
							</li>
						<?php endif; ?>
						<?php
						break;
					case 'telefono':
						?>
						<?php if( '' != $sm_telefono ): ?>
							<li><!-- Teléfono -->
								<a href="tel:<?php echo $sm_telefono; ?>" target="_blank">
									<i class="fas fa-phone fa-2x"></i>
									<?php if( "all" == $sm_tipo_desplegado ) :?>
										<span class="field">Teléfono</span>
									<?php endif; ?>
									<?php if( "all" == $sm_tipo_desplegado || "data" == $sm_tipo_desplegado ) :?>
										<span class="data"><?php echo $sm_telefono; ?></span>
									<?php endif; ?>
								</a>
							</li>
						<?php endif; ?>
						<?php
						break;
					case 'whatsapp':
						?>
						<?php if( '' != $sm_whatsapp ): ?>
							<li><!-- WhatsApp -->
								<a href="https://api.whatsapp.com/send?phone=52<?php echo $sm_whatsapp; ?>" target="_blank">
									<i class="fab fa-whatsapp fa-2x"></i>
									<?php if( "all" == $sm_tipo_desplegado ) :?>
										<span class="field">WhasApp</span>
									<?php endif; ?>
									<?php if( "all" == $sm_tipo_desplegado || "data" == $sm_tipo_desplegado ) :?>
										<span class="data"><?php echo $sm_whatsapp; ?></span>
									<?php endif; ?>
								</a>
							</li>
						<?php endif; ?>
						<?php
						break;
					case 'skype-chat':
						?>
						<?php if( '' != $sm_skype_chat ): ?>
							<li><!-- Skype Chat -->
								<a href="skype:<?php echo $sm_skype_chat; ?>?chat" target="_blank">
									<i class="fab fa-skype fa-2x"></i>
									<?php if( "all" == $sm_tipo_desplegado ) :?>
										<span class="field">Chat</span>
									<?php endif; ?>
									<?php if( "all" == $sm_tipo_desplegado || "data" == $sm_tipo_desplegado ) :?>
										<span class="data">@<?php echo $sm_skype_chat; ?></span>
									<?php endif; ?>
								</a>
							</li>
						<?php endif; ?>
						<?php
						break;
					case 'skype-call':
						?>
						<?php if( '' != $sm_skype_videollamada ): ?>
							<li><!-- Skype Call -->
								<a href="skype:<?php echo $sm_skype_videollamada; ?>?call" target="_blank">
									<i class="fab fa-skype fa-2x"></i>
									<?php if( "all" == $sm_tipo_desplegado ) :?>
										<span class="field">Video-llamada</span>
									<?php endif; ?>
									<?php if( "all" == $sm_tipo_desplegado || "data" == $sm_tipo_desplegado ) :?>
										<span class="data">@<?php echo $sm_skype_videollamada; ?></span>
									<?php endif; ?>
								</a>
							</li>
						<?php endif; ?>
						<?php
						break;
					case 'fb-messenger':
						?>
						<?php if( '' != $sm_messenger ): ?>
							<li><!-- Facebook messenger -->
								<a href="https://m.me/<?php echo $sm_messenger; ?>" target="blank">
									<i class="fab fa-facebook-messenger fa-2x"></i>
									<?php if( "all" == $sm_tipo_desplegado ) :?>
										<span class="field">Messenger</span>
									<?php endif; ?>
									<?php if( "all" == $sm_tipo_desplegado || "data" == $sm_tipo_desplegado ) :?>
										<span class="data">@<?php echo $sm_messenger; ?></span>
									<?php endif; ?>
								</a>
							</li>
						<?php endif; ?>
						<?php
						break;
					case 'instagram':
						?>
						<?php if( '' != $sm_instagram ): ?>
							<li><!-- Instagram -->
								<a href="https://www.instagram.com/<?php echo $sm_instagram; ?>/" target="_blank">
									<i class="fab fa-instagram fa-2x"></i>
									<?php if( "all" == $sm_tipo_desplegado ) :?>
										<span class="field">Instagram</span>
									<?php endif; ?>
									<?php if( "all" == $sm_tipo_desplegado || "data" == $sm_tipo_desplegado ) :?>
										<span class="data">@<?php echo $sm_instagram; ?></span>
									<?php endif; ?>
								</a>
							</li>
						<?php endif; ?>
						<?php
						break;
					case 'facebook':
						?>
						<?php if( '' != $sm_facebook ): ?>
							<li><!-- Facebook -->
								<a href="https://www.facebook.com/<?php echo $sm_facebook; ?>" target="_blank">
									<i class="fab fa-facebook-f fa-2x"></i>
									<?php if( "all" == $sm_tipo_desplegado ) :?>
										<span class="field">Facebook</span>
									<?php endif; ?>
									<?php if( "all" == $sm_tipo_desplegado || "data" == $sm_tipo_desplegado ) :?>
										<span class="data">@<?php echo $sm_facebook; ?></span>
									<?php endif; ?>
								</a>
							</li>
						<?php endif; ?>
						<?php
						break;
					case 'twitter':
						?>
						<?php if( '' != $sm_twitter ): ?>
							<li><!-- Twitter -->
								<a href="https://twitter.com/<?php echo $sm_twitter; ?>" target="_blank">
									<i class="fab fa-twitter fa-2x"></i>
									<?php if( "all" == $sm_tipo_desplegado ) :?>
										<span class="field">Twitter</span>
									<?php endif; ?>
									<?php if( "all" == $sm_tipo_desplegado || "data" == $sm_tipo_desplegado ) :?>
										<span class="data">@<?php echo $sm_twitter; ?></span>
									<?php endif; ?>
								</a>
							</li>
						<?php endif; ?>
						<?php
						break;
					case 'youtube':
						?>
						<?php if( '' != $sm_youtube ): ?>
							<li><!-- Youtube -->
								<a href="<?php echo $sm_youtube; ?>" target="_blank">
									<i class="fab fa-youtube fa-2x"></i>
									<?php if( "all" == $sm_tipo_desplegado ) :?>
										<span class="field">YouTube</span>
									<?php endif; ?>
									<?php if( "all" == $sm_tipo_desplegado || "data" == $sm_tipo_desplegado ) :?>
										<span class="data"><?php echo $sm_youtube; ?></span>
									<?php endif; ?>
								</a>
							</li>
						<?php endif; ?>
						<?php
						break;
					case 'vimeo':
						?>
						<?php if( '' != $sm_vimeo ): ?>
							<li><!-- Vimeo -->
								<a href="https://vimeo.com/<?php echo $sm_vimeo; ?>" target="_blank">
									<i class="fab fa-vimeo-v fa-2x"></i>
									<?php if( "all" == $sm_tipo_desplegado ) :?>
										<span class="field">Vimeo</span>
									<?php endif; ?>
									<?php if( "all" == $sm_tipo_desplegado || "data" == $sm_tipo_desplegado ) :?>
										<span class="data">@<?php echo $sm_vimeo; ?></span>
									<?php endif; ?>
								</a>
							</li>
						<?php endif; ?>
						<?php
						break;
					case 'pinterest':
						?>
						<?php if( '' != $sm_pinterest ): ?>
							<li><!-- Pinterest -->
								<a href="https://www.pinterest.com.mx/<?php echo $sm_pinterest; ?>/" target="_blank">
									<i class="fab fa-pinterest fa-2x"></i>
									<?php if( "all" == $sm_tipo_desplegado ) :?>
										<span class="field">Pinterest</span>
									<?php endif; ?>
									<?php if( "all" == $sm_tipo_desplegado || "data" == $sm_tipo_desplegado ) :?>
										<span class="data">@<?php echo $sm_pinterest; ?></span>
									<?php endif; ?>
								</a>
							</li>
						<?php endif; ?>
						<?php
						break;
					case 'vine':
						?>
						<?php if( '' != $sm_vine ): ?>
							<li><!-- Vine -->
								<a href="https://vine.co/u/<?php echo $sm_vine; ?>" target="_blank">
									<i class="fab fa-vine fa-2x"></i>
									<?php if( "all" == $sm_tipo_desplegado ) :?>
										<span class="field">Vine</span>
									<?php endif; ?>
									<?php if( "all" == $sm_tipo_desplegado || "data" == $sm_tipo_desplegado ) :?>
										<span class="data">@<?php echo $sm_vine; ?></span>
									<?php endif; ?>
								</a>
							</li>
						<?php endif; ?>
						<?php
						break;
					case 'linkedin':
						?>
						<?php if( '' != $sm_linkedin ): ?>
							<li><!-- LinkedIn -->
								<a href="https://www.linkedin.com/in/<?php echo $sm_linkedin; ?>/" target="_blank">
									<i class="fab fa-linkedin-in fa-2x"></i>
									<?php if( "all" == $sm_tipo_desplegado ) :?>
										<span class="field">LinkedIn</span>
									<?php endif; ?>
									<?php if( "all" == $sm_tipo_desplegado || "data" == $sm_tipo_desplegado ) :?>
										<span class="data">@<?php echo $sm_linkedin; ?></span>
									<?php endif; ?>
								</a>
							</li>
						<?php endif; ?>
						<?php
						break;
					case 'google-plus':
						?>
						<?php if( '' != $sm_googleplus ): ?>
							<li><!-- Google Plus -->
								<a href="https://plus.google.com/+<?php echo $sm_googleplus; ?>" target="_blank">
									<i class="fab fa-google-plus-g fa-2x"></i>
									<?php if( "all" == $sm_tipo_desplegado ) :?>
										<span class="field">Google Plus</span>
									<?php endif; ?>
									<?php if( "all" == $sm_tipo_desplegado || "data" == $sm_tipo_desplegado ) :?>
										<span class="data">+<?php echo $sm_googleplus; ?></span>
									<?php endif; ?>
								</a>
							</li>
						<?php endif; ?>
						<?php
						break;
					case 'direccion':
						?>
						<?php if( '' != $sm_direccion ): ?>
							<li><!-- Direccion -->
								<i class="fas fa-globe fa-2x"></i>
								<?php if( "all" == $sm_tipo_desplegado ) :?>
									<span class="field">Dirección</span>
								<?php endif; ?>
								<span class="data"><?php echo str_replace( chr( 10 ), '<br />', $sm_direccion); ?></span>
							</li>
						<?php endif; ?>
						<?php
						break;
				}
			}
			?>
		</ul>
		<?php if ( true === $share_whatsapp || true === $share_email ): 
			$subject = 'Perfil de ' . get_bloginfo( 'name' );
			$body = 'Te envío el perfil de ' . get_bloginfo( 'name' ) . ': ' . get_bloginfo( 'url' );
			$acentos = array( 'á', 'é', 'í', 'ó', 'ú', 'ü', 'Á', 'É', 'Í', 'Ó', 'Ú', 'Ü' );
			$no_acentos = array( 'a', 'e', 'i', 'o', 'u', 'u', 'A', 'E', 'I', 'O', 'U', 'U' );
			$subject = str_replace( $acentos, $no_acentos, $subject);
			$body = str_replace( $acentos, $no_acentos, $body);
			?>
			<ul>
				<?php if ( true === $share_whatsapp ): ?>
					<li>
						<a href="https://api.whatsapp.com/send?text=<?php echo $body; ?>" target="_blank">
							<i class="fab fa-whatsapp-square fa-2x"></i>
							<span class="data"><?php echo __( 'Compartir por WhatsApp', 'simple-theme' ); ?></span>
						</a>
					</li>
				<?php endif ?>
				<?php if ( true === $share_email ): ?>
					<li>
						<a href="mailto:?subject=<?php echo $subject; ?>&body=<?php echo $body; ?>">
							<i class="fas fa-envelope-square fa-2x"></i>
							<span class="data"><?php echo __( 'Compartir por Correo', 'simple-theme' ); ?></span>
						</a>
					</li>
				<?php endif ?>
			</ul>
		<?php endif ?>
	</nav>
	<?php
	return ob_get_clean();
}

function simpleTheme_registro_shortcode_contacto_ubicacion_socialmedia() {
	add_shortcode( 'ContactoUbicacionSocialMedia', 'simpleTheme_shortcode_contacto_ubicacion_socialmedia' );
}

add_action( 'init', 'simpleTheme_registro_shortcode_contacto_ubicacion_socialmedia' );

?>