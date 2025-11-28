import AboutSection from "@/components/about/AboutSection";
import Hero from "@/components/home/Hero";
import OurTeamSection from "@/components/ourteam/OurTeamSection";
import ServicesSection from "@/components/services/ServicesSection";
import SkillsAndExperienceSection from "@/components/skills/SkillsAndExperienceSection";

export default function HomePage() {
  return (
    <>
      <Hero />
      <AboutSection/>
      <ServicesSection/>
      <SkillsAndExperienceSection/>
      <OurTeamSection/>
    </>
  );
}