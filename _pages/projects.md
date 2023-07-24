---
permalink: /projects/
title: "Projects"
---

Thesis project topics.
----------------------

Below I list some research ideas that I would like to supervise for a research project/thesis. These can also be seen as research directions that I'm interested in, so if you are interested in related projects feel free to contact me as well (robv@itu.dk).

### Learn from context

Context is crucial for interpretation of language and thus also for many NLP tasks; however most tasks are tackled on the sentence level. A simple method for incorporating context is to simply add the previous sentence, previous work (e.g. [Vielsted et al.](https://aclanthology.org/2022.wnut-1.20.pdf)) has shown huge improvements with this. A more efficient and extendable method could be to include sentence embeddings in the first position(s), a variety of context size can then be easily be incorporated.

### How to learn from different sources

When training an NLP model on a variety of datasets, from different sources (and with different underlying distributions), it could be informative for the model to know about the origin of the text. A variety of methods can be used to inorporate this information, including:

*   Dataset embeddings: [Many Languages, One Parser](https://aclanthology.org/Q16-1031.pdf)
*   Just include the domain as a special start token, like \[SOCIAL\] or \[NEWS\].
*   Let the model predict the origin of the input as auxiliary task.

These methods have shown promising results in isolated setups, but have never been consistently compared.

### seq2seq versus classification models
Recently, sequence-to-sequence (seq2seq) have become more and more powerful. A recent paper has shown that seq2seq models can perform on-par with classification models through conversion of tasks to sequence generation tasks. However, the comparison is not direct, so it would be interesting to make a more direct comparison of an auto-encoder language model versus a generative one.

*  [Unleashing the True Potential of Sequence-to-Sequence Models for Sequence Tagging and Structure Parsing](https://aclanthology.org/2023.tacl-1.34.pdf)

### Discriminative multi-task learning with seq2seq models

In multi-task NLP, we commonly make the decision to use a discriminative language model OR a generative language model. It is non-trivial to use a discriminative model for generation, but the other way around is relatively simple. We could take the output after encoding (or even after decoding for some tasks), and learn our classifier on top of this.

MaChAmp 0.1 had the option for seq2seq tasks with discriminative models: [Massive Choice, Ample Tasks (MaChAmp):A Toolkit for Multi-task Learning in NLP](https://aclanthology.org/2021.eacl-demos.22.pdf). In newer versions this was removed, and generative language models are now supported (just without the seq2seq task). Note that this project does not have to be implemented within the MaChAmp framework.

### Processing of long documents

Recent NLP models often have a maximum input size of 512 for efficiecny reasons. In a recent competition on predicting document similarity, the winning approach took the first and last 128 (sub)words of two documents to compare them. This means that the majority of the input data is not taken into account, which is probably suboptimal for performance. To exploit current models, a two layered approach can be used; first we embed the full input in multiple windows, keeping one embedding out of each of the windows, then we run a separate neural network over the output of the previous steps, leading to a single label prediction.

*   [SemEval-2022 Task 8: Multilingual news article similarity](https://aclanthology.org/2022.semeval-1.155.pdf)


### The effect of translationese on slot and intent detection

The tasks of slot and intent detection is a crucial component of digital assisnents. Intent detection aims to find the goal of an utterance, and slot detection finds relevant entities. An example of this task:

| Add | reminder | to | swim   | at | 11am       | tomorrow   |
|     |          |    | B-TODO |    | B-DATETIME | I-DATETIME |

Intent: add-reminder

Recently, two big multi-lingual datasets have been introduced (multiAtis, and xSID). However, these datasets consist of data translated from English. Translationese is known to be different from spontaneous language. This project aims to estimate the effect of this difference. By generating a small sample of native non-English data (for example Danish), and evaluating this against the xSID data.

Here you can find the xSID paper, and an investigation on translationese for machine translation evaluation:

*   [From Masked Language Modeling to Translation: Non-English Auxiliary Tasks Improve Zero-shot Spoken Language Understanding](https://aclanthology.org/2021.naacl-main.197.pdf)
*   [The Effect of Translationese in Machine Translation Test Sets](https://aclanthology.org/W19-5208.pdf)

### Multi-lingual lexical normalization

Lexical normalization is the task of converting social media language to its canonical equivalent. Most literature on this problem is only tackling this task for one language. But in 2021, MultiLexNorm was introduced; including normalization datasets for 13 language variants. A wide variety of models was evaluated on this new benchmark, however all of these trained a single model for each language. However, at least three of these models can be used in a multi-lingual or cross-lingual setup, which could enable more efficiency, performance and transfer to new language for which no annotated data is available.

*   [MultiLexNorm: A Shared Task on Multilingual Lexical Normalization](https://aclanthology.org/2021.wnut-1.55.pdf)
*   Website for dataset: [Multi-LexNorm](http://noisy-text.github.io/2021/multi-lexnorm.html)

### Dependency parsing of Danish social media data

Dependency parsing is the task of finding the syntactic relations between words in a sentence. [Chapter 14](https://web.stanford.edu/~jurafsky/slp3/14.pdf) of the Speech and Language Processing book contains a nice introduction to this topic. Many different languages and domains have been covered by the recent [Universal Dependencies project](https://universaldependencies.org/). However, for language types not covered performance is generally lower. Recently, we have collected some non-canonical data samples: [DaN+](https://www.aclweb.org/anthology/2020.coling-main.583.pdf), for which it is uncertain how well current methods would perform.

The goal of this project would be to annotate a small sample of Danish social media data to evaluate parsers. Then, a variety of approaches of adapting the parser could be studied, including the ones mentioned below:

*   [Challenges in Annotating and Parsing Spoken, Code-switched, Frisian-Dutch Data](https://www.aclweb.org/anthology/2021.adaptnlp-1.6.pdf)
*   [Cross-lingual Parsing with Polyglot Training and Multi-treebank Learning: A Faroese Case Study](https://www.aclweb.org/anthology/D19-6118.pdf)
*   [A systematic comparison of methods for low-resource dependency parsing on genuinely low-resource languages](https://www.aclweb.org/anthology/D19-1102.pdf)
*   [How to Parse Low-Resource Languages: Cross-Lingual Parsing, Target Language Annotation, or Both?](https://www.aclweb.org/anthology/W19-7713.pdf)
*   [Modeling Input Uncertainty in Neural Network Dependency Parsing](https://www.aclweb.org/anthology/D18-1542.pdf)

### Active learning for POS tagging

POS tagging is the task of classifying words into their syntactic category:

| I    | see  | the | light |
| PRON | VERB | DET | NOUN  |

Current POS tagger are usually supervised, which means they rely on human-annotated training data. This data commonly exists of thousands of sentences. To make this process less costly, one can select a more informative sample of words to rely on, and instead only annotate this subsample. Previous work (see below) has shown that competetive performance can be obtained with as little as 400 words on English news data. However, it is unclear how this transfers to other languages/domains. In this project, the first step is to evaluate the existing method on a larger sample (i.e. the [Universal Dependencies dataset](https://universaldependencies.org/)), followed by possible improvements to the model.

Related reading:

*   [Simple Semi-Supervised POS Tagging](https://www.aclweb.org/anthology/W15-1511.pdf)

### Conversion of NLP tasks to sequence labeling tasks

Because of the continually increasing power of sequence labelers, competetive performance for complex tasks can be gained by simplifying tasks to sequence labeling problems. This lead to efficient and accurate NLP models. The main setup is: 1) find a task (I have a couple in mind already of course), 2) convert this a sequence labeling problem 3) train a sequence labeler for this conversion, 4) then convert the sequence back to the original task and evaluate. This is mainly an algorithmic project, as existing sequence labelers can be used.

Succesfull examples on some NLP tasks:

*   [Biomedical Event Extraction as Sequence Labeling](../doc/beesl.pdf)
*   [Tetra-Tagging: Word-Synchronous Parsing with Linear-Time Inference](https://www.aclweb.org/anthology/2020.acl-main.557.pdf)
*   [Viable Dependency Parsing as Sequence Labeling](https://www.aclweb.org/anthology/N19-1077.pdf)

### Tokenization of social media data

In many NLP benchmarks, tokenized texts are assumed as input to our models. For standard domains, tokenization can be considered a solved problem, however, for social media text tokenization is non-trivial. The goal of this project is to create a multi-lingual corpus and model for this task. Steps include:

*   Finding the original utterances of [Multi-LexNorm](http://noisy-text.github.io/2021/multi-lexnorm.html)
*   Create a gold standard dataset based on the original and the tokenized data.
*   Evaluate existing tokenizers and train your own.

Some related work:

*   [Universal Word Segmentation: Implementation and Interpretation](https://www.aclweb.org/anthology/Q18-1030.pdf)
*   [twokenize](https://github.com/myleott/ark-twokenize-py/blob/master/twokenize.py)
*   [nltk.TweetTokenizer](https://www.nltk.org/_modules/nltk/tokenize/casual.html#TweetTokenizer)

### Efficient Language identification for many languages

Language identification is a standard NLP task, which is often considered to be solved. However, most current classifiers only support around 100 languages, or are not publicly available. This project makes use of the [LTI LangID Corpus](http://www.cs.cmu.edu/~ralf/langid.html)(with >1300 languages), and asks the question: how can we efficiently handle such a large label space, and such a wide variety in input-features. Relevant previous work:

*   [Non-linear Mapping for Improved Identification of 1300+ Languages](https://www.aclweb.org/anthology/D14-1069.pdf)
*   [A Fast, Compact, Accurate Model for Language Identification of Codemixed Text](https://www.aclweb.org/anthology/D18-1030.pdf)
*   [Language ID in the Wild: Unexpected Challenges on the Path to a Thousand-Language Web Text Corpus](https://www.aclweb.org/anthology/2020.coling-main.579.pdf)

### Strategies for Morphological Tagging

Morphological tagging is the task of assigning labels to a sequence of tokens that describe them morphologically. This means that one word can have 0-n labels. There has been a variety of architectures proposed to solve this task, however it is unclear which method works best in which situation.

In this project you can make use of the [Universal Dependencies](https://universaldependencies.org/) data, which has annotation for morphological tags for many languages. You can use the [MaChAmp](https://machamp-nlp.github.io/) toolkit, or implement a BiLSTM tagger yourself, and evaluate at least the three most common strategies:

*   Predict the concatenation of the tags as one label (same as POS tagging, but with more labels)
*   Predict morphological tags as a sequence (like machine translation)
*   View the task as a multilabel prediction problem (Get a probability for each label, and set a cutoff threshold)

Related reading:

*   [The SIGMORPHON 2019 Shared Task: Morphological Analysis in Context and Cross-Lingual Transfer for Inflection](https://aclanthology.org/W19-4226/)
*   [Multi-Team: A Multi-attention, Multi-decoder Approach to Morphological Analysis.](https://aclanthology.org/W19-4206)

### Effect of sociodemographic factors on language use

Recent work has shown that including the origin of a text instance can improve performance on NLP tasks. However, it is unclear which specific sociodemographic attributes correlate with language use. Recent efforts on annotation of social media data could give us more insights.

*   [Women’s Syntactic Resilience and Men’s Grammatical Luck: Gender-Bias in Part-of-Speech Tagging and Dependency Parsing](https://www.aclweb.org/anthology/P19-1339.pdf)
*   [Gender Differences in English Syntax](https://journals.sagepub.com/doi/pdf/10.1177/007242030002005)
*   [Cross-lingual syntactic variation over age and gender](https://www.aclweb.org/anthology/K15-1011.pdf)


