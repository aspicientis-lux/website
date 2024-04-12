export class Component {

    constructor(name, metaUrl) {
      this.name = name;
      this.metaUrl = metaUrl;
    }

    async fetchTemplate() {
        const parser = new DOMParser()
        const root = this.getWebRoot();
        const response = await fetch(`${root}/assets/components/${this.name}/template.html`)
        const contents = await response.text();
        const html = contents.replaceAll('href="/', `href="${root}/`);
        return parser.parseFromString(html, 'text/html').querySelector('template')
    }

    getWebRoot() {
        const moduleUrl = `/assets/components/${this.name}/index.js`
        return this.metaUrl.substring(0, this.metaUrl.length - moduleUrl.length);
    }
}