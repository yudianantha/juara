import './bootstrap';

const chrome = require('@sparticuz/chromium');
const puppeteer = require('puppeteer-core');
const production = process.env.NODE_ENV === 'production';

const getPage = async () => {
    const browser = await puppeteer.launch(
        production ? {
            args: chrome.args,
            defaultViewport: chrome.defaultViewport,
            executablePath: await chrome.executablePath(),
            headless: 'new',
            ignoreHTTPSErrors: true
        } : {
            headless: 'new',
            executablePath: '/Applications/Google Chrome.app/Contents/MacOS/Google Chrome'
        }
    );
    const page = await browser.newPage();
    return page;
};