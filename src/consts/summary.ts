import { yearsExperience } from './experiences';

const summary = `Proactive and detail-oriented Software Engineer with ${yearsExperience}+ years of industry-proven experience in delivering high-quality, reliable solutions. Passionate about automation and emerging technologies, with a focus on precision, creativity, and continuous improvement. Recognized for resilience, perseverance, and dedication to excellence, consistently ensuring that work is executed with diligence.`;

const dob = new Date('1995-09-12');

const age = new Date().getFullYear() - dob.getFullYear();

export { summary, dob, age };
