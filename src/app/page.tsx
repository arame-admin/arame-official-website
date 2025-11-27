import AboutSection from "@/components/AboutSection";
import Hero from "@/components/Hero";
import OurTeamSection from "@/components/OurTeamSection";
import ServicesSection from "@/components/ServicesSection";
import SkillsAndExperienceSection from "@/components/SkillsAndExperienceSection";

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