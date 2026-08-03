import { defineConfig } from "vite";
import tailwindcss from "@tailwindcss/vite";
import { resolve } from "path";

import posthtml from "posthtml";
import include from "posthtml-include";

function htmlIncludePlugin() {
  return {
    name: "html-include",

    async transformIndexHtml(html) {
      const result = await posthtml([
        include({
          root: "./",
        }),
      ]).process(html);

      return result.html;
    },
  };
}

export default defineConfig({
  base: "/demo/our-project/",

  plugins: [
    tailwindcss(),
    htmlIncludePlugin(),
  ],

  build: {
    rollupOptions: {
      input: {
        index: resolve(__dirname, "index.html"),
     
        glossary: resolve(__dirname, "glossary.html"),
      accreditation: resolve(__dirname, "glossary/accreditation.html"),
        blog: resolve(__dirname, "blog/index.html"),
        "blog-detail": resolve(__dirname, "blog/blog-detail.html"),
        college: resolve(__dirname, "college/index.html"),
        "college-detail": resolve(__dirname, "college/college-detail.html"),
         college: resolve(__dirname, "exam/index.html"),
         alumni: resolve(__dirname, "alumni/index.html"),
      },
    },
  },
});