# Pegah Heidari () - Portfolio Website

A modern, responsive portfolio website showcasing the professional experience and skills of Pegah Heidari, a Software Engineer with 7+ years of experience. Built with Vue.js 3, TypeScript, and Tailwind CSS.

## 🚀 Features

- **Single Page Application (SPA)** with smooth scroll navigation
- **Responsive Design** optimized for all devices (mobile-first approach)
- **Vue.js 3** with Composition API and TypeScript
- **Custom Color Scheme** using brand colors (Navy #0D1B2A, Slate #415A77, Orange #FC7A1E, Light #D9D9D9)
- **Dark/Light Theme Toggle** with system preference detection and state persistence
- **SEO Optimized** for "Pegah Heidari", "Azizjahan", and "Software Engineer"
- **Performance Optimized** with code splitting and lazy loading
- **Accessibility Compliant** with proper ARIA labels and semantic HTML
- **Modern Animations** with smooth transitions and scroll effects
- **Component-based Architecture** with reusable, well-structured components

## 📋 Portfolio Sections

- **Hero Section** - Introduction with profile image, social links, and call-to-action
- **Summary** - Professional summary with key statistics
- **Experience** - Timeline-based work history with detailed achievements
- **Education** - Academic background with grades and institutions
- **Skills** - Technical skills with icons, organized by category + languages with proficiency levels
- **Certifications** - Professional certifications with downloadable links
- **Contact** - Multiple contact methods and social media links

## 🎨 Design System

- **Primary Colors**: Navy, Slate, Orange, Light Gray
- **Typography**: Inter font family with multiple weights
- **Components**: Reusable card, button, and navigation components
- **Animations**: Smooth fade-in, slide-up, and hover effects
- **Glass Effect**: Modern backdrop blur effects for navigation

## 📋 Prerequisites

- Node.js 18.0.0 or higher
- pnpm 8.0.0 or higher

## 🛠️ Installation

1. **Clone the repository**

   ```bash
   git clone <your-repo-url>
   cd pghheidari.github.io
   ```

2. **Install dependencies**

   ```bash
   pnpm install
   ```

3. **Set up Git hooks (automatic after pnpm install)**
   ```bash
   pnpm run prepare
   ```

## 🚀 Development

### Start Development Server

```bash
pnpm run dev
```

The application will be available at `http://localhost:3000`

### Build for Production

```bash
pnpm run build
```

The built files will be in the `dist/` directory.

### Preview Production Build

```bash
pnpm run preview
```

## 🔧 Development Tools

### Linting

```bash
pnpm run lint
```

Runs ESLint with auto-fix on all TypeScript and Vue files.

### Formatting

```bash
pnpm run format
```

Runs Prettier to format all source files.

### Type Checking

```bash
pnpm run type-check
```

Runs TypeScript compiler to check for type errors.

## 📁 Project Structure

```
├── src/
│   ├── App.vue              # Main application component
│   ├── main.ts              # Application entry point
│   └── style.css            # Global styles with Tailwind
├── public/                  # Static assets
├── .husky/                  # Git hooks configuration
├── .vscode/                 # VS Code settings
├── dist/                    # Production build output
├── index.html               # HTML template
├── package.json             # Dependencies and scripts
├── tsconfig.json            # TypeScript configuration
├── vite.config.ts           # Vite configuration
├── tailwind.config.js       # Tailwind CSS configuration
├── postcss.config.js        # PostCSS configuration
├── .eslintrc.cjs            # ESLint configuration
├── .prettierrc              # Prettier configuration
├── .gitignore               # Git ignore rules
└── README.md                # Project documentation
```

## 🎨 Styling

This project uses **Tailwind CSS** with a custom design system:

- **Primary Colors**: Blue palette (`primary-50` to `primary-900`)
- **Typography**: Inter font family
- **Components**: Pre-built component classes (`.btn-primary`, `.card`, etc.)
- **Utilities**: Custom utility classes (`.text-gradient`)

### Custom CSS Classes

```css
.btn-primary    /* Primary button styling */
.btn-secondary  /* Secondary button styling */
.card           /* Card component styling */
.text-gradient  /* Gradient text effect */
```

## 🔒 Code Quality

### ESLint Rules

- **Vue.js**: Component naming, prop validation, event handling
- **TypeScript**: Strict type checking, no explicit `any`, proper return types
- **General**: Code style, best practices, security rules

### Prettier Configuration

- **Semicolons**: Enabled
- **Quotes**: Single quotes
- **Line Length**: 80 characters
- **Tab Width**: 2 spaces

### Pre-commit Hooks

- **lint-staged** runs on staged files
- **ESLint** auto-fixes issues
- **Prettier** formats code
- **TypeScript** type checking

## 🚀 Deployment

### GitHub Pages

1. Build the project: `pnpm run build`
2. Push the `dist/` folder to the `gh-pages` branch
3. Configure GitHub Pages to serve from the `gh-pages` branch

### Netlify

1. Connect your repository to Netlify
2. Set build command: `pnpm run build`
3. Set publish directory: `dist`

### Vercel

1. Import your repository to Vercel
2. Framework preset: Vite
3. Build command: `pnpm run build`
4. Output directory: `dist`

## 🤝 Contributing

1. Fork the repository
2. Create a feature branch: `git checkout -b feature/amazing-feature`
3. Make your changes
4. Run linting: `pnpm run lint`
5. Run type checking: `pnpm run type-check`
6. Commit your changes: `git commit -m 'Add amazing feature'`
7. Push to the branch: `git push origin feature/amazing-feature`
8. Open a Pull Request

## 📝 License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## 🆘 Support

If you encounter any issues or have questions:

1. Check the [Issues](../../issues) page
2. Create a new issue with detailed information
3. Include your Node.js and pnpm versions
4. Provide error messages and steps to reproduce

## 🔄 Updates

To update dependencies:

```bash
pnpm update
pnpm audit fix
```

## 📊 Performance

This project is optimized for performance:

- **Tree shaking** for smaller bundle sizes
- **Code splitting** for better loading times
- **Source maps** for debugging
- **Optimized builds** with Vite

---

Built with ❤️ using Vue.js, TypeScript, and Tailwind CSS
