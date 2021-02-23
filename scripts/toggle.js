/**
 * 
 * SERVICES TOGGLE
 *  
 */

const socialMedia = document.querySelector('.socialMedia');
const webDesign = document.querySelector('.webDesign');
const branding = document.querySelector('.branding');
const photography = document.querySelector('.photography');

const socialMedia__text = document.querySelector('.socialMedia__text');
const webDesign__text = document.querySelector('.webDesign__text');
const branding__text = document.querySelector('.branding__text');
const photography__text = document.querySelector('.photography__text');

const socialMediaIcon = document.querySelector('button.socialMedia svg');
const webDesignIcon = document.querySelector('button.webDesign svg');
const brandingIcon = document.querySelector('button.branding svg');
const photographyIcon = document.querySelector('button.photography svg');


webDesign.addEventListener('click', () => {
    webDesign__text.style.display = 'flex';
    webDesign.style.background = 'var(--second)';
    webDesignIcon.style.fill = 'var(--font)';
    socialMedia__text.style.display = 'none';
    branding__text.style.display = 'none';
    photography__text.style.display = 'none';
});

socialMedia.addEventListener('click', () => {
    socialMedia__text.style.display = 'flex';
    socialMedia.style.background = 'var(--second)';
    socialMediaIcon.style.fill = 'var(--font)';
    webDesign__text.style.display = 'none';
    branding__text.style.display = 'none';
    photography__text.style.display = 'none';
});

branding.addEventListener('click', () => {
    branding__text.style.display = 'flex';
    branding.style.background = 'var(--second)';
    brandingIcon.style.fill = 'var(--font)';
    webDesign__text.style.display = 'none';
    socialMedia__text.style.display = 'none';
    photography__text.style.display = 'none';
});

photography.addEventListener('click', () => {
    photography__text.style.display = 'flex';
    socialMedia__text.style.display = 'none';
    webDesign__text.style.display = 'none';
    branding__text.style.display = 'none';
});