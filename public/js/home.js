const scrollPresentation = document.getElementById('scroll-presentation');
scrollPresentation.onclick = _ => document.getElementById('presentation').scrollIntoView({ behavior: 'smooth', block: 'start' });

const scrollTimeline = document.getElementById('scroll-timeline');
scrollTimeline.onclick = _ => document.getElementById('timeline').scrollIntoView({ behavior: 'smooth', block: 'start' });

const scrollSkills = document.getElementById('scroll-skills');
scrollSkills.onclick = _ => document.getElementById('skills').scrollIntoView({ behavior: 'smooth', block: 'start' });

const scrollProjects = document.getElementById('scroll-projects');
scrollProjects.onclick = _ => document.getElementById('projects').scrollIntoView({ behavior: 'smooth', block: 'start' });

const scrollTop = document.getElementById('scroll-top');
scrollTop.onclick = _ => document.getElementById('title').scrollIntoView({ behavior: 'smooth', block: 'start' });