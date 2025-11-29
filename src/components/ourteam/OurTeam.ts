interface SocialLinks {
  facebook?: string;
  twitter?: string;
  linkedin?: string;
  dribbble?: string;
}

// eslint-disable-next-line @typescript-eslint/no-unused-vars
interface TeamMember {
  id: number;
  name: string;
  title: string;
  imageUrl: string;
  socials: SocialLinks;
}