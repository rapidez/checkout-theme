import dotenv from 'dotenv'
import path from 'path'
import { fileURLToPath } from 'url'
const __filename = fileURLToPath(import.meta.url)
const __dirname = path.dirname(__filename)
dotenv.config({
    path: [
        path.resolve(__dirname, 'tests', 'playwright', '.env.testing'),
        path.resolve(__dirname, '.env')
    ],
    override: true,
    quiet: true
})

import baseConfig from './vendor/rapidez/core/playwright.config.js'
import { defineConfig } from '@playwright/test'

export default defineConfig({
    ...baseConfig,
    testDir: './tests/playwright',
})
