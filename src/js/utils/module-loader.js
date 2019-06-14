export default (module) => {
    let $modulesTargets = module ? $(module).find('[data-is]') : $('[data-is]');

    $modulesTargets.each((i, module) => {
        let moduleName = $(module).data('is');
        try {
            let moduleFunc = require(`../modules/${moduleName}.js`).default;
            moduleFunc(module);
            console.log(`%c Module loaded: ${moduleName}`, 'color: #67db00');
        } catch (err) {
            console.log(`%c Module ${moduleName} error: ${err}`, 'color: #fb1f1f');
        };
    });
};
