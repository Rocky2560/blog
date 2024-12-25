<?php
/**
 * Lancr admin notify
 *
 */
if ( !defined( 'ABSPATH' ) ) {
	exit;
}

if ( !class_exists( 'Lancr_Notify_Admin' ) ) :

	/**
	 * The Lancr admin notify
	 */
	class Lancr_Notify_Admin {

		/**
		 * Setup class.
		 *
		 */
		public function __construct() {

			add_action( 'admin_enqueue_scripts', array( $this, 'enqueue_scripts' ) );
			add_action( 'admin_notices', array( $this, 'admin_notices' ), 99 );
			add_action( 'wp_ajax_lancr_dismiss_notice', array( $this, 'dismiss_nux' ) );
			add_action( 'admin_menu', array( $this, 'add_menu' ), 5 );
		}

		/**
		 * Enqueue scripts.
		 *
		 */
		public function enqueue_scripts() {
			global $wp_customize;

			if ( isset( $wp_customize ) || lancr_envo_extra_is_activated() ) {
				return;
			}

			wp_enqueue_style( 'lancr-admin', get_template_directory_uri() . '/assets/css/admin/admin.css', '', '1' );

			wp_enqueue_script( 'lancr-admin', get_template_directory_uri() . '/assets/js/admin/admin.js', array( 'jquery', 'updates' ), '1', 'all' );

			$lancr_notify = array(
				'nonce' => wp_create_nonce( 'lancr_notice_dismiss' )
			);

			wp_localize_script( 'lancr-admin', 'lancr_ux', $lancr_notify );
		}

		/**
		 * Output admin notices.
		 *
		 */
		public function admin_notices() {
			global $pagenow;

			if ( ( 'themes.php' === $pagenow ) && isset( $_GET[ 'page' ] ) && ( 'lancr' === $_GET[ 'page' ] ) || true === (bool) get_option( 'lancr_notify_dismissed' ) || lancr_envo_extra_is_activated() ) {
				return;
			}
			?>

			<div class="notice notice-info lancr-notice is-dismissible">

				<div class="notice-content">
					<?php if ( !lancr_envo_extra_is_activated() && current_user_can( 'install_plugins' ) && current_user_can( 'activate_plugins' ) ) : ?>
						<h2>
							<?php
							/* translators: %s: Theme name */
							printf( esc_html__( 'Thank you for installing %s.', 'lancr' ), '<strong>Lancr</strong>' );
							?>
						</h2>
						<p>
							<?php
							/* translators: %s: Plugin name string */
							printf( esc_html__( 'To take full advantage of all the features this theme has to offer, please install and activate the %s plugin.', 'lancr' ), '<strong>Envo Extra</strong>' );
							?>
						</p>
						<p>
							<a href="<?php echo esc_url( admin_url( 'themes.php?page=lancr' ) ); ?>" class="button button-primary button-hero">
								<?php
								/* translators: %s: Theme name */
								printf( esc_html__( 'Get started with %s', 'lancr' ), 'Lancr' );
								?>
							</a>
						</p>
					<?php endif; ?>
				</div>
			</div>
			<?php
		}

		public function add_menu() {
			if ( isset( $wp_customize ) || lancr_envo_extra_is_activated() ) {
				return;
			}
			add_theme_page(
			'Lancr', 'Lancr', 'edit_theme_options', 'lancr', array( $this, 'admin_page' )
			);
		}

		public function admin_page() {


			if ( lancr_envo_extra_is_activated() ) {
				return;
			}
			?>

			<div class="notice notice-info lancr-notice-nux">

				<div class="notice-content">
					<?php if ( !lancr_envo_extra_is_activated() && current_user_can( 'install_plugins' ) && current_user_can( 'activate_plugins' ) ) : ?>
						<h2>
							<?php
							/* translators: %s: Theme name */
							printf( esc_html__( 'Thank you for installing %s.', 'lancr' ), '<strong>Lancr</strong>' );
							?>
						</h2>
						<p>
							<?php
							/* translators: %s: Plugin name string */
							printf( esc_html__( 'To take full advantage of all the features this theme has to offer, please install and activate the %s plugin.', 'lancr' ), '<strong>Envo Extra</strong>' );
							?>
						</p>
						<p><?php Lancr_Plugin_Install::install_plugin_button( 'envo-extra', 'envo-extra.php', 'Envo Extra', array( 'lancr-nux-button' ), __( 'Activated', 'lancr' ), __( 'Activate', 'lancr' ), __( 'Install', 'lancr' ) ); ?></p>
					<?php endif; ?>


				</div>
			</div>
			<?php
		}

		/**
		 * AJAX dismiss notice.
		 *
		 * @since 2.2.0
		 */
		public function dismiss_nux() {
			$nonce = !empty( $_POST[ 'nonce' ] ) ? sanitize_text_field( wp_unslash( $_POST[ 'nonce' ] ) ) : false;

			if ( !$nonce || !wp_verify_nonce( $nonce, 'lancr_notice_dismiss' ) || !current_user_can( 'manage_options' ) ) {
				die();
			}

			update_option( 'lancr_notify_dismissed', true );
		}

	}

	endif;

return new Lancr_Notify_Admin();
