/**
 * @typedef {import('@roots/bud').Bud} bud
 *
 * @param {bud} app
 */
module.exports = async (app) => {
  app
  /**
   * Application assets & entrypoints
   *
   * @see {@link https://bud.js.org/docs/bud.entry}
   * @see {@link https://bud.js.org/docs/bud.assets}
   */
    .entry('app', ['@scripts/app', '@styles/app'])
    .entry('editor', ['@scripts/editor', '@styles/editor'])
    .assets(['images'])

    /**
     * Set public path
     *
     * @see {@link https://bud.js.org/docs/bud.setPublicPath}
     */
    .setPublicPath('/app/themes/wraith/public/')

    /**
     * Development server settings
     *
     * @see {@link https://bud.js.org/docs/bud.setUrl}
     * @see {@link https://bud.js.org/docs/bud.setProxyUrl}
     * @see {@link https://bud.js.org/docs/bud.watch}
     */
    .setUrl('http://starglaze-new.test:3000')
    .setProxyUrl('https://starglaze-new.test')
    .watch(['resources/views', 'app'])

   /**
    * Vue config
    */
    // .template({template: app.path('@resources/views/page-vue.blade.php')})
};